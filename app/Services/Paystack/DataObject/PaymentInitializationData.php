<?php

namespace App\Services\Paystack\DataObject;

use Illuminate\Contracts\Support\Arrayable;

class PaymentInitializationData implements Arrayable
{
    public function __construct(
        public int $amountInKobo,
        public string $email,
        public string $reference,
        public ?string $callbackUrl
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['amount'],
            $data['email'],
            $data['reference'],
            $data['callback_url'] ?? null
        );
    }

    public function toArray(): array
    {
        return [
            'amount' => $this->amountInKobo,
            'email' => $this->email,
            'reference' => $this->reference,
            'callback_url' => $this->callbackUrl,
        ];
    }
}
