<?php

namespace App\Actions\Accounting;

use App\Enums\BankAccountType;
use App\Models\BankAccount;
use App\Models\User;

class CreateWithdrawalAccount
{
    public function __construct()
    {
    }

    public function handle(User $user)
    {
        // call third party service to create account for the user

        return BankAccount::create([
            'type' => BankAccountType::WITHDRAWAL
        ]);
    }
}
