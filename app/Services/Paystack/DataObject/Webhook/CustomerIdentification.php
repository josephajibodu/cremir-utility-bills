<?php

namespace App\Services\Paystack\DataObject\Webhook;

use Illuminate\Contracts\Support\Arrayable;

class CustomerIdentification implements Arrayable
{
    public function __construct(
        public string $country,
        public string $type,
        public ?string $value,
        public ?string $bvn,
        public ?string $accountNumber,
        public ?string $bankCode,

    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['country'],
            $data['type'],
            $data['value'] ?? null,
            $data['bvn'] ?? null,
            $data['account_number'] ?? null,
            $data['bank_code'] ?? null
        );
    }

    public function toArray(): array
    {
        return [
            'country' => $this->country,
            'type' => $this->type,
            'value' => $this->value,
            'bvn' => $this->bvn,
            'account_number' => $this->accountNumber,
            'bank_code' => $this->bankCode,
        ];
    }
}
