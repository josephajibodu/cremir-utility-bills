<?php

namespace App\Services\Paystack\DataObject\Webhook;

use Illuminate\Contracts\Support\Arrayable;

class ChargeSuccess implements Arrayable
{
    public function __construct(public string $event, public array $data)
    {
        $this->event = $event;
        $this->data = $data;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['event'],
            $data['data']
        );
    }

    public function toArray(): array
    {
        return [
            'event' => $this->event,
            'data' => $this->data,
        ];
    }
}
