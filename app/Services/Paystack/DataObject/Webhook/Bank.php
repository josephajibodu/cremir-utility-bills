<?php

namespace App\Services\Paystack\DataObject\Webhook;

use Illuminate\Contracts\Support\Arrayable;

class Bank implements Arrayable
{
    public function __construct(
        public string $name,
        public string $id,
        public string $slug,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['name'],
            $data['id'],
            $data['slug'],
        );
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'id' => $this->id,
            'slug' => $this->slug,
        ];
    }
}
