<?php

namespace App\Services\AirtimeNigeria\DataObject;

use Illuminate\Contracts\Support\Arrayable;

class DataTopupRequest implements Arrayable
{
    public function __construct(
        public string $phone,
        public string $packageCode,
        public string $maxAmount,
        public string $customerReference,
        public string $callbackUrl,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['phone'],
            $data['package_code'],
            $data['max_amount'],
            $data['customer_reference'],
            $data['callback_url']
        );
    }

    public function toArray(): array
    {
        return [
            'phone' => $this->phone,
            'package_code' => $this->packageCode,
            'max_amount' => $this->maxAmount,
            'customer_reference' => $this->customerReference,
            'callback_url' => $this->callbackUrl,
        ];
    }
}
