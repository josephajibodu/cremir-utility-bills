<?php

namespace App\Services\Paystack\DataObject\Webhook;

use Illuminate\Contracts\Support\Arrayable;

class CustomerIdentificationFailed implements Arrayable
{
    public function __construct(
        public int $customerId,
        public string $customerCode,
        public string $email,
        public CustomerIdentification $identification,
    ) {
        $this->customerId = $customerId;
        $this->customerCode = $customerCode;
        $this->email = $email;
        $this->identification = $identification;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['customer_id'],
            $data['customer_code'],
            $data['email'],
            CustomerIdentification::fromArray($data['identification']),
        );
    }

    public function toArray(): array
    {
        return [
            'customer_id' => $this->customerId,
            'customer_code' => $this->customerCode,
            'email' => $this->email,
            'identification' => $this->identification->toArray(),
        ];
    }
}
