<?php

namespace App\Actions\Accounting;

use App\Models\User;

class UserHasSufficientFunds
{
    public function handle(?User $user, bool $useBonus = false)
    {
        return true;
    }
}
