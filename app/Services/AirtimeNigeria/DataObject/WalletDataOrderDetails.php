<?php

namespace App\Services\AirtimeNigeria\DataObject;

class WalletDataOrderDetails extends OrderDetails
{
    public function __construct(
        string $reference,
        ?string $customerReference,
        string $package,
        string $recipients,
        int $numberOfRecipients,
        ?int $airtimeAmount, // only available for airtime
        int $unitCost,
        int $totalCost,
        string $currency,

        public string $gatewayResponse,
        public string $deliveryStatus,
        public string $orderStatus
    ) {
        parent::__construct(
            $reference,
            $customerReference,
            $package,
            $recipients,
            $numberOfRecipients,
            $airtimeAmount,
            $unitCost,
            $totalCost,
            $currency
        );
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['reference'],
            $data['customer_reference'] ?? null,
            $data['package'],
            $data['recipients'],
            $data['number_of_recipients'],
            $data['airtime_amount'] ?? null,
            $data['unit_cost'],
            $data['total_cost'],
            $data['currency'],

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
            'reference' => $this->reference,
            'customer_reference' => $this->customerReference,
            'package' => $this->package,
            'recipients' => $this->recipients,
            'number_of_recipients' => $this->numberOfRecipients,
            'airtime_amount' => $this->airtimeAmount,
            'unit_cost' => $this->unitCost,
            'total_cost' => $this->totalCost,
            'currency' => $this->currency,

            'gateway_response' => $this->gatewayResponse,
            'delivery_status' => $this->deliveryStatus,
            'order_status' => $this->orderStatus,
        ];
    }
}
