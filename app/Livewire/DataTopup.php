<?php

namespace App\Livewire;

use App\Enums\Network;
use App\Services\AirtimeNigeria\DataObject\DataPlan;
use App\Services\AirtimeNigeria\Topup;
use Livewire\Component;

class DataTopup extends Component
{
    public Network $network = Network::MTN;

    public string $phone;

    public array $package;

    public string $maxAmount;

    public string $customerReference = 'oluwayomi-1';

    public string $callbackUrl = 'https://webhook.site/1e8e6f33-ca4f-41d7-9e1e-4fd2febb9a8e';

    public array $allPlans = [];

    //    public array $activePlans = [];

    public string $dataFilter = 'monthly';

    public array $activePlanGroup = [];

    public function selectContact(string $phone, string $network = Network::MTN->value)
    {
        $this->phone = $phone;
        $this->network = Network::from($network);

        $this->updatePlans();
    }

    public function updated($property)
    {
        if ($property === 'network') {
            $this->phone = '';
            $this->updatePlans();
        }
    }

    public function filterBy(string $filter)
    {
        $this->dataFilter = $filter;
    }

    public function selectPackage(string $packageCode)
    {
        $plans = $this->activePlanGroup[$this->dataFilter];
        $this->package = collect($plans)->first(fn ($plan) => DataPlan::fromArray($plan)->packageCode == $packageCode);
    }

    public function mount(Topup $topup)
    {
        $plans = collect($topup->getPlans());
        $groupedPlans = $plans->groupBy('network_operator');
        $this->allPlans = $groupedPlans->toArray();

        $this->updatePlans();
    }

    public function render()
    {
        return view('livewire.data-topup');
    }

    private function updatePlans()
    {
        $activePlans = $this->allPlans[$this->network->value];

        $validityCategories = [
            'daily' => ['1 day', '2 days', '3 days'],
            'weekly' => ['7 days', '14 days'],
            'monthly' => ['30 days'],
            '2-months' => ['60 days'],
            '3-months' => ['90 days'],
            '6-months' => ['180 days'],
            'yearly' => ['365 days'],
        ];

        $validityCache = [];
        $activeGroups = [];

        foreach ($activePlans as $plan) {
            $validity = $plan['validity'];

            if (isset($validityCache[$validity])) {
                $category = $validityCache[$validity];
                $activeGroups[$category] = [...$activeGroups[$category], $plan];
            } else {
                foreach ($validityCategories as $category => $validities) {

                    if (in_array($validity, $validities)) {

                        // add the validity with the right group to cache
                        $validityCache[$validity] = $category;
                        $activeGroups[$category] = isset($activeGroups[$category]) ? [...$activeGroups[$category], $plan] : [$plan];
                    }
                }
            }
        }

        $this->activePlanGroup = $activeGroups;

        $this->dataFilter = array_key_exists('monthly', $activeGroups) ? 'monthly' : array_keys($activeGroups)[0];
    }
}
