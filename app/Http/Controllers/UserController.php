<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Beneficiary;
use App\Models\UserSelection;
use App\Models\UserPlan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return view('auth.register');
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
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user); // Automatically log the user in after registration
        return redirect()->route('profile')->with('success', 'Registration successful.');
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

    // 5. Select Hospital, Gym, and Spa
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
    public function subscribeToPlan(Request $request)
    {
        $request->validate(['plan_id' => 'required|exists:plans,id']);

        $user = Auth::user();
        UserPlan::updateOrCreate(
            ['user_id' => $user->id],
            ['plan_id' => $request->plan_id]
        );

        return back()->with('success', 'Plan subscribed successfully.');
    }

    // 7. Get User's Plan
    public function getUserPlan()
    {
        $user = Auth::user();
        $plan = $user->plan;

        return view('user.plan', compact('plan'));
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
}
