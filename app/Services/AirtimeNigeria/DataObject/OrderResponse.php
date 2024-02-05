<?php

namespace App\Services\AirtimeNigeria\DataObject;

use Illuminate\Contracts\Support\Arrayable;

class OrderResponse implements Arrayable
{
    public function __construct(
        public bool $success,
        public string $status,
        public string $message,
        public OrderDetails $details,
    ) {
    }

    public static function fromArray(array $data): OrderResponse
    {
        $details = OrderDetails::fromArray($data['details']);

        return new self(
            $data['success'],
            $data['status'],
            $data['message'],
            $details,
        );
    }

    public function toArray(): array
    {
        return [
            'success' => $this->success,
            'status' => $this->status,
            'message' => $this->message,
            'details' => $this->details,
        ];
    }
}
