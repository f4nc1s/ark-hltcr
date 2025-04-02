<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Kyc;
use App\Models\Dependent;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): Response
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:male,female,other'],
            'dob' => ['required', 'date'],
            'kin_name' => ['required', 'string', 'max:255'],
            'kin_email' => ['required', 'string', 'email', 'max:255'],
            'kin_phone' => ['required', 'string', 'max:20'],
            'relationship' => ['required', 'string', 'in:sister,brother,parent,spouse,other'],
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
            'beneficiary_id' => $user->id, // Linking dependent to the user
            'full_name' => $request->kin_name,
            'address' => $request->address, // Assuming kin shares the same address
            'phone_number' => $request->kin_phone,
            'relationship' => $request->relationship,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return response()->noContent();
    }
}
