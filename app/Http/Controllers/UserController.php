<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kyc;
use App\Models\Dependent;
use App\Models\Beneficiary;
use App\Models\UserSelection;
use App\Models\UserPlan;
use App\Models\Plan;
use App\Models\Hospital;
use App\Models\Gym;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class UserController extends Controller
{
    // Show Login Form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Show Registration Form
    public function showRegistrationForm()
    {
        return view('auth.signup.register');
    }

    // 1. Register a New User
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female,other',
            'dob' => 'required|date',
            'kin_name' => 'required|string|max:255',
            'kin_email' => 'required|string|email|max:255',
            'kin_phone' => 'required|string|max:20',
            'relationship' => 'required|string|in:brother,sister,father,mother,spouse,child',
            'document_type' => 'required|string|max:255', // Added validation for document type
            'document_number' => 'required|string|max:255', // Added validation for document number
            'expiry_date' => 'required|date', // Added validation for expiry date
        ]);

        // Create the user
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Save KYC details
        Kyc::create([
            'user_id' => $user->id,
            'document_type' => $request->document_type, // Adjust as needed
            'document_number' => $request->document_number, // Adjust as needed
            'expiry_date' => $request->expiry_date, // Added validation for expiry date
            'address' => $request->address,
            'state' => $request->state,
            'gender' => $request->gender,
            'dob' => $request->dob,
        ]);

        // Save Next of Kin details in Dependents table
        Dependent::create([
            'user_id' => $user->id, // Linking dependent to the user
            'full_name' => $request->kin_name,
            'address' => $request->address, // Assuming kin shares the same address
            'phone_number' => $request->kin_phone,
            'relationship' => $request->relationship,
        ]);

        Auth::login($user);

        // return redirect()->route('profile')->with('success', 'Registration successful.');
        return redirect()->route('subscription')->with('success', 'Registration successful. Please choose a plan.');
    }

    // 2. Login User
    public function login(Request $request)
    {
        $request->validate([
            'identifier' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        // Determine if input is email or phone number
        $credentials = filter_var($request->identifier, FILTER_VALIDATE_EMAIL)
            ? ['email' => $request->identifier, 'password' => $request->password]
            : ['phone_number' => $request->identifier, 'password' => $request->password];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Login successful. Welcome back!');
        }

        return redirect()->back()->with('error', 'Invalid email/phone or password.');
    }
    // Show Dashboard View
    public function dashboard()
    {
        $user = Auth::user();
        $plan = $user->userPlan ? $user->userPlan->plan : 'Not Active';
        $selection = $user->userSelection;
        $beneficiaryCount = $user->beneficiaries()->count();
        $userPlans = $user->userPlans()->with('plan')->orderBy('start_date', 'desc')->get();
        $latestPlan = $user->userPlans()->latest('start_date')->first();


        return view('dashboard', compact('user', 'plan', 'selection', 'beneficiaryCount', 'userPlans', 'latestPlan'));
    }

    // 3. Get User Profile
    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    // 4. Update User Profile
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->update($request->only(['first_name', 'last_name', 'phone_number', 'email']));

        return back()->with('success', 'Profile updated successfully.');
    }

    // 5. Select Hospital, Gym, and Spa (TODO: i was thinking differently when i created this, i will leave it here sha)
    public function selectServices(Request $request)
    {
        $request->validate([
            'hospital_id' => 'required|exists:hospitals,id',
            'gym_id' => 'required|exists:gyms,id',
            'spa_id' => 'required|exists:spas,id',
        ]);

        $user = Auth::user();
        UserSelection::updateOrCreate(
            ['user_id' => $user->id],
            ['hospital_id' => $request->hospital_id, 'gym_id' => $request->gym_id, 'spa_id' => $request->spa_id]
        );

        return back()->with('success', 'Services selected successfully.');
    }

    // 6. Subscribe to a Plan
    // public function subscribeToPlan(Request $request)
    // {
    //     $request->validate(['plan_id' => 'required|exists:plans,id']);

    //     $user = Auth::user();
    //     UserPlan::updateOrCreate(
    //         ['user_id' => $user->id],
    //         ['plan_id' => $request->plan_id]
    //     );

    //     return back()->with('success', 'Plan subscribed successfully.');
    // }

    public function subscribeToPlan(Request $request)
    {
        $request->validate(['plan_id' => 'required|exists:plans,id']);

        $user = Auth::user();

        // Store plan selection
        $userPlan = UserPlan::updateOrCreate(
            ['user_id' => $user->id],
            ['plan_id' => $request->plan_id]
        );

        // Prepare Cube Cover parameters
        $trxnId = Str::uuid(); // or your own transaction ID logic
        $transdate = now()->format('YmdHis');
        $serviceId = 'AXA34445628'; // Replace with your dynamic ID based on plan

        // Fetch additional info from user's KYC
        $kyc = $user->kyc;

        $payload = [
            'FirstName'     => $user->first_name,
            'LastName'      => $user->last_name,
            'Email'         => $user->email,
            'Address'       => $kyc?->address,
            'State'         => $kyc?->state,
            'Gender'        => ucfirst($kyc?->gender ?? 'NA'),
            'DateOfBirth'   => $kyc?->dob,
            'PhoneMake'     => 'NA', // optional
            'ServiceID'     => $serviceId,
            'PhoneNumber'   => $user->phone_number,
            'Paytype'       => 'new',
            'TransactioNDate' => $transdate,
            'TransactionID' => $trxnId,
        ];

        // Make request to Cube Cover
        $response = Http::withHeaders([
            'X-API-KEY' => env('CUBECOVER_API_KEY')
        ])->get('https://pilot-embed.cubecover.ai/3pp/sync', $payload);

        // Log or store the transaction if needed
        if ($response->successful() && $response['status']) {
            // store tracking number, expiry, etc if needed
            return back()->with('success', 'Plan subscribed and synced successfully.');
        } elseif ($response['message'] === 'Sync Pending') {
            return back()->with('info', 'Plan subscription pending confirmation. Please check back later.');
        } else {
            return back()->with('error', 'Sync failed: ' . $response['message']);
        }
    }

    // 7. Get User's Plan
    public function getUserPlan()
    {
        $user = Auth::user();
        $currentPlan = $user->userPlan?->plan_id;
        $plans = Plan::all();

        $plansWithFeatures = $plans->map(function ($plan) {
            switch ($plan->id) {
                case 1:
                    $plan->features = [
                        'Specialist consultation',
                        'Basic telemedicine',
                        'Emergency room visits',
                        'Basic diagnostic imaging',
                        'Blood tests',
                        'Hospital admission',
                        'Annual wellness checks'
                    ];
                    break;
                case 2:
                    $plan->features = [
                        'All Essential Plan features',
                        'Enhanced telemedicine',
                        'Advanced imaging & diagnostics',
                        'Private/semi-private rooms',
                        'Basic surgical procedures',
                        'Cancer care'
                    ];
                    break;
                case 3:
                    $plan->features = [
                        'All Advantage Plan features',
                        'Renal & critical care',
                        'Annual executive checkups',
                        'Dedicated health advisor',
                        'Medical evacuation cover'
                    ];
                    break;
                default:
                    $plan->features = ['No features available'];
            }
            return $plan;
        });
        return view('subscription', compact('plansWithFeatures', 'currentPlan'));
    }

    // 8. Add Beneficiary
    public function addBeneficiary(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'gender' => 'required|in:male,female,other',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|unique:beneficiaries',
        ]);

        Beneficiary::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
        ]);

        return back()->with('success', 'Beneficiary added successfully.');
    }

    // 9. Get User Beneficiaries
    public function getBeneficiaries()
    {
        $beneficiaries = Auth::user()->beneficiaries;

        return view('user.beneficiaries', compact('beneficiaries'));
    }

    // 10. Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logged out successfully.');
    }

    //11. Hospital Management
    public function hospitals(Request $request)
    {
        $query = Hospital::with('plans');
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('location', 'like', '%' . $request->search . '%');
        }
        if ($request->filled('sort_by')) {
            $query->orderBy($request->sort_by, $request->sort_order ?? 'asc');
        }
        $hospitals = $query->paginate(10);
        $plans = Plan::all();

        return view('hospital', compact('hospitals', 'plans'));
    }

    public function selectHospital(Request $request)
    {
        $request->validate([
            'hospital_id' => 'required|exists:hospitals,id',
        ]);

        $user = Auth::user();

        // Update or create selection for the user
        UserSelection::updateOrCreate(
            ['user_id' => $user->id],
            ['hospital_id' => $request->hospital_id]
        );

        return redirect()->back()->with('success', 'Hospital selected successfully.');
    }

    //12. Hospital Management
    public function gyms(Request $request)
    {
        $query = Gym::with('plans');
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('location', 'like', '%' . $request->search . '%');
        }
        if ($request->filled('sort_by')) {
            $query->orderBy($request->sort_by, $request->sort_order ?? 'asc');
        }
        $gyms = $query->paginate(10);
        $plans = Plan::all();

        return view('gym', compact('gyms', 'plans'));
    }

    public function selectGym(Request $request)
    {
        $request->validate([
            'gym_id' => 'required|exists:gyms,id',
        ]);

        $user = Auth::user();

        // Update or create selection for the user
        UserSelection::updateOrCreate(
            ['user_id' => $user->id],
            ['gym_id' => $request->gym_id]
        );

        return redirect()->back()->with('success', 'Gym selected successfully.');
    }
}
