<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Kyc;
use App\Models\Dependent;

class newRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_new_users_can_register(): void
    {
        $response = $this->post('/register', [
            'first_name' => 'Test',
            'last_name' => 'User',
            'phone_number' => '1234567890',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'address' => '123 Main St',
            'state' => 'CA',
            'gender' => 'male',
            'dob' => '1990-01-01',
            'kin_name' => 'Kin User',
            'kin_email' => 'kin@example.com',
            'kin_phone' => '0987654321',
            'relationship' => 'sister',
            'document_type' => 'passport',
            'document_number' => 'ABC123',
            'expiry_date' => '2025-01-01',
        ]);

        // Wait for authentication to complete
        $this->waitFor(function () {
            return Auth::check();
        });

        // Assert user is authenticated
        $this->assertAuthenticated();

        // Assert user data is correct
        $user = Auth::user();
        $this->assertEquals('Test', $user->first_name);
        $this->assertEquals('User', $user->last_name);
        $this->assertEquals('test@example.com', $user->email);

        // Assert KYC data is saved
        $kyc = $user->kyc;
        $this->assertEquals('passport', $kyc->document_type);
        $this->assertEquals('ABC123', $kyc->document_number);
        $this->assertEquals('2025-01-01', $kyc->expiry_date);

        // Assert dependent data is saved
        $dependent = $user->dependents()->first();
        $this->assertEquals('Kin User', $dependent->full_name);
        $this->assertEquals('kin@example.com', $dependent->email);
    }

    public function test_registration_with_invalid_data_fails(): void
    {
        $response = $this->post('/register', [
            'first_name' => 'Test',
            'email' => 'invalid-email',
            'password' => 'password',
            'password_confirmation' => 'different-password',
        ]);

        $response->assertSessionHasErrors();
        $this->assertDatabaseMissing('users', [
            'email' => 'invalid-email',
        ]);
    }
}
