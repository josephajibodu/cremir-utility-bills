<?php

namespace App\Services\Paystack;

use App\Services\Paystack\DataObject\PaymentInitializationData;
use App\Services\Paystack\DataObject\PaymentInitializationResponse;
use App\Services\Paystack\DataObject\VirtualAccountRequestData;
use HttpRequest;

class Paystack
{
    use HttpRequest;

    protected $apiBaseUrl;

    protected $publicKey;

    protected $secretKey;

    public function __construct()
    {
        $this->apiBaseUrl = config('services.paystack.url');
        $this->publicKey = config('services.paystack.key');
        $this->secretKey = config('services.paystack.secret');
    }

    public function initializePayment(PaymentInitializationData $data): PaymentInitializationResponse
    {
        $response = $this->makeRequest('post', '/transaction/initialize', $data->toArray());

        return PaymentInitializationResponse::fromArray($response['data']);
    }

    public function verifyTransaction(string $reference): array
    {
        $response = $this->makeRequest('post', "/transaction/verify/$reference");

        return $response['data'];
    }

    public function createVirtualBankAccount(VirtualAccountRequestData $data)
    {
        $response = $this->makeRequest('post', "/dedicated_account/assign",  $data->toArray());

        return $response;
    }

    private function getAuthorization()
    {
        return "Bearer $this->secretKey";
    }
}