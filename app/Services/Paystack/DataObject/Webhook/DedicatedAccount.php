<?php

namespace App\Services\Paystack\DataObject\Webhook;

use Illuminate\Contracts\Support\Arrayable;

class DedicatedAccount implements Arrayable
{
    public function __construct(
        public Bank $bank,
        public string $accountName,
        public string $accountNumber,
        public bool $assigned,
        public string $currency,
        public ?array $metadata,
        public bool $active,
        public int $id,
        public string $createdAt,
        public string $updatedAt,
        public array $assignment
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            Bank::fromArray($data['bank']),
            $data['account_name'],
            $data['account_number'],
            $data['assigned'],
            $data['currency'],
            $data['metadata'],
            $data['active'],
            $data['id'],
            $data['created_at'],
            $data['updated_at'],
            $data['assignment']
        );
    }

    public function toArray(): array
    {
        return [
            'bank' => $this->bank->toArray(),
            'account_name' => $this->accountName,
            'account_number' => $this->accountNumber,
            'assigned' => $this->assigned,
            'currency' => $this->currency,
            'metadata' => $this->metadata,
            'active' => $this->active,
            'id' => $this->id,
            'created_at' => $this->createdAt,
            'updated_at' => $this->updatedAt,
            'assignment' => $this->assignment,
        ];
    }
}
