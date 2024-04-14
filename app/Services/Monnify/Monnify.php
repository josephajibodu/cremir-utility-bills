<?php

namespace App\Services\Monnify;

use App\Services\Paystack\DataObject\PaymentInitializationData;
use App\Services\Paystack\DataObject\PaymentInitializationResponse;
use App\Services\Paystack\DataObject\VirtualAccountRequestData;
use App\Traits\HttpRequest;

class Monnify
{
    use HttpRequest;

    protected $apiBaseUrl;

    protected $publicKey;

    protected $secretKey;

    public function __construct()
    {
        $this->apiBaseUrl = config('services.monnify.url');
        $this->publicKey = config('services.monnify.key');
        $this->secretKey = config('services.monnify.secret');
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
