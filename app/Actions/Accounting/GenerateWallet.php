<?php

namespace App\Actions\Accounting;

use App\Models\User;
use App\Models\Wallet;

class GenerateWallet
{
    public function handle(User $user)
    {
        return Wallet::create(['user_id' => $user->id]);
    }
}
