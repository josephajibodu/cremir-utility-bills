<?php

namespace App\Actions\Wallet;

use App\Models\User;

class ReverseFunds
{
    public function handle(User $user, int $amountInKobo, array $details)
    {
        // create transaction
        // credit the users wallet
        // send email notification
    }
}
