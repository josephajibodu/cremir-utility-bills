<?php

namespace App\Actions\Accounting;

use App\Enums\BankAccountType;
use App\Models\BankAccount;
use App\Models\User;
use App\Models\Wallet;

class GenerateDepositAccount
{
    public function __construct()
    {
    }

    public function handle(User $user)
    {
        // call third party service to create account for the user

        return BankAccount::create([
            'type' => BankAccountType::DEPOSIT
        ]);
    }
}
