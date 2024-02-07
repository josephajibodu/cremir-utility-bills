<?php

namespace App\Livewire;

use App\Actions\Accounting\UserHasSufficientFunds;
use App\Actions\DataTopup\PurchaseData;
use App\Enums\Network;
use App\Services\AirtimeNigeria\DataObject\DataPlan;
use App\Services\AirtimeNigeria\Topup;
use Exception;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class DataTopup extends Component
{
    public Network $network = Network::MTN;

    public string $phone = '';

    public ?array $package = null;

    public int $maxAmount = 0;

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
        $this->resetValidation();
        if ($property === 'network') {
            $this->phone = '';
            $this->package = null;
            $this->updatePlans();
        }
    }

    public function filterBy(string $filter)
    {
        $this->dataFilter = $filter;
    }

    public function selectPackage(string $packageCode)
    {
        $this->resetValidation();
        $plans = $this->activePlanGroup[$this->dataFilter];
        $this->package = collect($plans)->first(fn ($plan) => DataPlan::fromArray($plan)->packageCode == $packageCode);
    }

    public function purchaseData(PurchaseData $purchaseDataAction, UserHasSufficientFunds $hasSufficientFunds)
    {
        // Remove any non-numeric characters from the phone number
        //        $cleanedPhoneNumber = preg_replace('/[^0-9]/', '', $this->phone);
        //
        //        $pattern = '/^(234|0)([789][01])\d{8}$/';

        //        if (!preg_match($pattern, $cleanedPhoneNumber)) {
        //            $this->addError('phone', 'Phone number is invalid');
        //        }
        //
        //        if (!$this->package) {
        //            $this->addError('package', 'You must select a Data package');
        //        }

        $validated = Validator::make(
            // Data to validate...
            [
                'phone' => $this->phone,
                'package' => $this->package['package_code'] ?? null,
            ],

            // Validation rules to apply...
            [
                'phone' => ['required', "regex:/^(\+234|0)([789][01])\d{8}/"],
                'package' => ['required'],
            ],

            // Custom validation messages...
            [
                'phone.required' => 'Please enter the recipient phone number',
                'phone.regex' => 'Phone number is invalid',
                'package.required' => 'You must select a data bundle',
            ],
        )->validate();

        try {
            // Check the users balance
            $hasSufficientFunds->handle(null);

            // Make the call to purchase data here
            $purchaseDataAction->execute(null, $this->network, DataPlan::fromArray($this->package));

            // send out data-purchased event
            $this->dispatch('data-purchased');

            $this->resetForm();
        } catch (Exception $ex) {
            $this->dispatch('data-purchase-error', message: $ex->getMessage());
        }
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

    private function resetForm()
    {
        $this->phone = '';
        $this->package = null;
    }
}
