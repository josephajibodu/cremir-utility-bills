<?php

namespace App\Services\Paystack\DataObject;

use Illuminate\Contracts\Support\Arrayable;

class VirtualAccountRequestData implements Arrayable
{
    public function __construct(
        public string $email,
        public string $firstName,
        public ?string $middleName,
        public string $lastName,
        public string $phone,
        public string $preferredBank,
        public string $country,
        public string $bvn
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['email'],
            $data['first_name'],
            $data['middle_name'] ?? null,
            $data['last_name'],
            $data['phone'],
            $data['preferred_bank'],
            $data['country'],
            $data['bvn'] ?? null
        );
    }

    public function toArray(): array
    {
        return [
            'email' => $this->email,
            'first_name' => $this->firstName,
            'middle_name' => $this->middleName,
            'last_name' => $this->lastName,
            'phone' => $this->phone,
            'preferred_bank' => $this->preferredBank,
            'country' => $this->country,
            'country' => $this->country,
            'bvn' => $this->bvn,
        ];
    }
}
