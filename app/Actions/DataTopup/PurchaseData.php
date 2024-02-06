<?php

namespace App\Actions\DataTopup;

use App\Enums\Network;
use App\Models\User;
use App\Services\AirtimeNigeria\DataObject\DataPlan;

class PurchaseData
{
    public function execute(User|null $user, Network $network, DataPlan $package)
    {

    }
}
