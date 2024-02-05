<?php

class Topup {
    protected $apiBaseUrl = 'https://www.airtimenigeria.com/api/v1/';

    protected $apiToken;

    public function __construct($apiToken)
    {
        $this->apiToken = $apiToken;
    }

    public function purchaseAirtime($networkOperator, $phone, $amount, $maxAmount, $callbackUrl = null, $customerReference = null)
    {
        $url = $this->apiBaseUrl . 'airtime';

        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->apiToken,
        ];

        $data = [
            'network_operator' => $networkOperator,
            'phone' => $phone,
            'amount' => $amount,
            'max_amount' => $maxAmount,
            'callback_url' => $callbackUrl,
            'customer_reference' => $customerReference,
        ];

        return $this->makeRequest('POST', $url, $headers, $data);
    }

    // Add other methods for additional API endpoints (e.g., purchaseDataWithNairaBalance)

    protected function makeRequest($method, $url, $headers, $data)
    {
        try {
            $response = Http::withHeaders($headers)->$method($url, $data);
            return $response->json();
        } catch (\Exception $exception) {
            // Log errors using Laravel's logging facilities
            Log::error('API Request Failed: ' . $exception->getMessage());

            // You can customize error handling based on your needs

            return [
                'success' => false,
                'status' => 'failed',
                'message' => 'An error occurred while processing the request.',
            ];
        }
    }
}