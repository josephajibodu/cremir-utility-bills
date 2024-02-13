<?php

namespace App\Services\Paystack\DataObject\Webhook;

use Illuminate\Contracts\Support\Arrayable;

class Identification implements Arrayable
{
    public function __construct(
        public string $status,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['status'],
        );
    }

    public function toArray(): array
    {
        return [
            'status' => $this->status,
        ];
    }
}
