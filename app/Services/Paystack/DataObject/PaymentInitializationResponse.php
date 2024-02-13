<?php

namespace App\Services\Paystack\DataObject;

use Illuminate\Contracts\Support\Arrayable;

class PaymentInitializationResponse implements Arrayable
{
    public function __construct(
        public string $authorizationUrl,
        public string $accessCode,
        public string $reference,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['authorization_url'],
            $data['access_code'],
            $data['reference'],
        );
    }

    public function toArray(): array
    {
        return [
            'authorization_url' => $this->authorizationUrl,
            'access_code' => $this->accessCode,
            'reference' => $this->reference,
        ];
    }
}
