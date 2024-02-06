<?php

namespace App\Services\AirtimeNigeria\DataObject;

use Illuminate\Contracts\Support\Arrayable;

class DataPlan implements Arrayable
{
    public string $bundle;

    public ?string $dataType;

    public function __construct(
        public string $networkOperator,
        public string $planSummary,
        public string $packageCode,
        public ?int $planId,
        public string $validity,
        public int $regularPrice,
        public int $agentPrice,
        public int $dealerPrice,
        public string $currency
    ) {
        preg_match('/(\d+(\.\d+)?)([MGT]B)/', $this->planSummary, $matches);
        $this->bundle = $matches[0];

        preg_match('/\|([^|]+)\|/', $this->planSummary, $matches);
        $this->dataType = $matches[1] ?? null;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['network_operator'],
            $data['plan_summary'],
            $data['package_code'],
            $data['plan_id'] ?? null,
            $data['validity'],
            $data['regular_price'],
            $data['agent_price'],
            $data['dealer_price'],
            $data['currency']
        );
    }

    public function toArray(): array
    {
        return [
            'network_operator' => $this->networkOperator,
            'plan_summary' => $this->planSummary,
            'package_code' => $this->packageCode,
            'plan_id' => $this->planId,
            'validity' => $this->validity,
            'regular_price' => $this->regularPrice,
            'agent_price' => $this->agentPrice,
            'dealer_price' => $this->dealerPrice,
            'currency' => $this->currency,
        ];
    }
}
