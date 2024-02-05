<?php

namespace App\Services\AirtimeNigeria\DataObject;

use Illuminate\Contracts\Support\Arrayable;

class WebhookPayload implements Arrayable
{
    public function __construct(
        public string $reference,
        public string $customerReference,
        public string $recipient,
        public string $gatewayResponse,
        public string $deliveryStatus,
        public DeliveryReport $data
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['reference'],
            $data['customer_reference'],
            $data['recipient'],
            $data['gateway_response'],
            $data['delivery_status'],
            $data['data']
        );
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(): array
    {
        return [
            'reference' => $this->reference,
            'customer_reference' => $this->customerReference,
            'recipient' => $this->recipient,
            'gateway_response' => $this->gatewayResponse,
            'delivery_status' => $this->deliveryStatus,
            'data' => $this->data,
        ];
    }
}
