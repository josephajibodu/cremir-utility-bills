<?php

namespace App\Actions\Fortify;

use App\Actions\Accounting\GenerateWallet;
use App\Jobs\GenerateVirtualAccount;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    public function __construct(public GenerateWallet $generateWallet)
    {
    }

    /**
     * Validate and create a newly registered user.
     *
     * @param array<string, string> $input
     * @throws ValidationException
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required', 'regex:/^(\+234|0)([789][01])\d{8}/', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        $cleanedPhoneNumber = preg_replace('/^(?:\+234|234)/', '', $input['phonenumber']);

        $user = User::create([
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'phonenumber' => $cleanedPhoneNumber,
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        // Create Wallet for the user (can be queued)
        $this->generateWallet->handle($user);

        // Create Deposit Bank Accounts for the user (can be queued)
        GenerateVirtualAccount::dispatch($user);

        return $user;
    }
}
