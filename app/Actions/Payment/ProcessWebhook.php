<?php

namespace App\Actions\Payment;

use App\Enums\WebhookStatus;
use App\Models\Webhook;

class ProcessWebhook
{
    public function handle(array $webhookData, string $for)
    {
        // store the webhook in a table, with status of pending
        Webhook::create([
            'type' => $webhookData['event'],
            'provider' => $for,
            'status' => WebhookStatus::PENDING,
            'data' => $webhookData,
        ]);

        // return a response back to the webhook caller
        response()->send();
    }
}