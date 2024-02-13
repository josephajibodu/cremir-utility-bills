<?php

namespace App\Services\Paystack\DataObject\Webhook;

use Illuminate\Contracts\Support\Arrayable;

class DedicatedAccountAssignFailedDTO implements Arrayable
{
    public function __construct(public Customer $customer, public ?DedicatedAccount $dedicatedAccount, public Identification $identification)
    {
        $this->customer = $customer;
        $this->dedicatedAccount = $dedicatedAccount;
        $this->identification = $identification;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            Customer::fromArray($data['customer']),
            DedicatedAccount::fromArray($data['dedicated_account']),
            Identification::fromArray($data['identification'])
        );
    }

    public function toArray(): array
    {
        return [
            'customer' => $this->customer->toArray(),
            'dedicated_account' => $this->dedicatedAccount->toArray(),
            'identification' => $this->identification->toArray(),
        ];
    }
}
