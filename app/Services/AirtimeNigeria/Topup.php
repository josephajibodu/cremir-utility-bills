<?php

namespace App\Services\AirtimeNigeria;

use App\Services\AirtimeNigeria\DataObject\AirtimeTopupRequest;
use App\Services\AirtimeNigeria\DataObject\DataTopupRequest;
use HttpRequest;
use Illuminate\Support\Facades\Cache;

class Topup
{
    use HttpRequest;

    protected $apiBaseUrl;

    protected $apiToken;

    public function __construct()
    {
        $this->apiBaseUrl = config('services.airtimenigeria.url');
        $this->apiToken = config('services.airtimenigeria.key');
    }

    public function purchaseAirtime(AirtimeTopupRequest $data)
    {
        $url = "$this->apiBaseUrl/airtime";

        return $this->makeRequest('POST', $url, $data->toArray());
    }

    public function purchaseData(DataTopupRequest $data)
    {
        $url = "$this->apiBaseUrl/data";

        return $this->makeRequest('POST', $url, $data->toArray());
    }

    public function purchaseDataFromWallet(DataTopupRequest $data)
    {
        $url = "$this->apiBaseUrl/data/wallet";

        return $this->makeRequest('POST', $url, $data->toArray());
    }

    public function getPlans(): array
    {
        $url = "$this->apiBaseUrl/data/plans";

        // Set a unique cache key based on the URL
        $cacheKey = 'plans_'.md5($url);

        // Check if the data is already cached
        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        // If not cached, make the API request
        $response = $this->makeRequest('GET', $url);

        // Cache the data for a specified duration (e.g., 1 hour)
        Cache::put($cacheKey, $response['data'], now()->addMinutes(5));

        return $response['data'];
    }

    public function getBalance()
    {
        $url = "$this->apiBaseUrl/balance";

        return $this->makeRequest('GET', $url);
    }

    public function getReport(string $reference)
    {
        $url = "$this->apiBaseUrl/delivery";

        return $this->makeRequest('GET', $url, ['reference' => $reference]);
    }
}
