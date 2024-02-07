<?php

namespace App\Actions\Accounting;

use App\Models\User;

class DebitUser
{
    public function handle(User $user, int $amountInKobo, bool $toBonus = false)
    {
        return true;
    }
}
