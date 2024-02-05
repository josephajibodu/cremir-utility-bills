<?php

namespace App\Services\AirtimeNigeria\DataObject;

use Illuminate\Contracts\Support\Arrayable;

class OrderDetails implements Arrayable
{
    public function __construct(
        public string $reference,
        public ?string $customerReference,
        public string $package,
        public string $recipients,
        public int $numberOfRecipients,
        public ?int $airtimeAmount, // only available for airtime
        public int $unitCost,
        public int $totalCost,
        public string $currency,
    ) {
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
            $data['currency']
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
        ];
    }
}
