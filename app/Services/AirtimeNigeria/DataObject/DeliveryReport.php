<?php

namespace App\Services\AirtimeNigeria\DataObject;

use Illuminate\Contracts\Support\Arrayable;

class DeliveryReport implements Arrayable
{
    public function __construct(
        public string $recipients,
        public string $gatewayResponse,
        public string $deliveryStatus,
        public string $orderStatus
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['recipients'],
            $data['gateway_response'],
            $data['delivery_status'],
            $data['order_status']
        );
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(): array
    {
        return [
            'recipients' => $this->recipients,
            'gateway_response' => $this->gatewayResponse,
            'delivery_status' => $this->deliveryStatus,
            'order_status' => $this->orderStatus,
        ];
    }
}
