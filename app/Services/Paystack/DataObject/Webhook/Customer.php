<?php

namespace App\Services\Paystack\DataObject\Webhook;

use Illuminate\Contracts\Support\Arrayable;

class Customer implements Arrayable
{
    public function __construct(
        public int $id,
        public string $firstName,
        public string $lastName,
        public string $email,
        public string $customerCode,
        public string $phone,
        public array $metadata,
        public string $riskAction,
        public string $internationalFormatPhone
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['id'],
            $data['first_name'],
            $data['last_name'],
            $data['email'],
            $data['customer_code'],
            $data['phone'],
            $data['metadata'],
            $data['risk_action'],
            $data['international_format_phone']
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'customer_code' => $this->customerCode,
            'phone' => $this->phone,
            'metadata' => $this->metadata,
            'risk_action' => $this->riskAction,
            'international_format_phone' => $this->internationalFormatPhone,
        ];
    }
}
