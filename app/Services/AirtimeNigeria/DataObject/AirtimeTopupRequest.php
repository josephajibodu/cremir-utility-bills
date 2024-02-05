<?php

namespace App\Services\AirtimeNigeria\DataObject;

use Illuminate\Contracts\Support\Arrayable;

class AirtimeTopupRequest implements Arrayable
{
    public function __construct(
        public string $networkOperator,
        public string $phone,
        public int $amount,
        public string $maxAmount,
        public string $callbackUrl,
        public string $customerReference,
    ) {
    }

    public static function fromArray(array $data): AirtimeTopupRequest
    {
        return new self(
            $data['networkOperator'],
            $data['phone'],
            $data['amount'],
            $data['maxAmount'],
            $data['callbackUrl'],
            $data['customerReference']
        );
    }

    public function toArray(): array
    {
        return [
            'networkOperator' => $this->networkOperator,
            'phone' => $this->phone,
            'amount' => $this->amount,
            'maxAmount' => $this->maxAmount,
            'callbackUrl' => $this->callbackUrl,
            'customerReference' => $this->customerReference,
        ];
    }
}
