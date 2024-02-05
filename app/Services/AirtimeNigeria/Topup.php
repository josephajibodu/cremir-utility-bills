<?php

namespace App\Services\AirtimeNigeria;

use App\Services\AirtimeNigeria\DataObject\AirtimeTopupRequest;
use App\Services\AirtimeNigeria\DataObject\DataTopupRequest;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Topup
{
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

    public function getPlans()
    {
        $url = "$this->apiBaseUrl/data/plans";

        // Set a unique cache key based on the URL
        $cacheKey = 'plans_' . md5($url);

        // Check if the data is already cached
        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        // If not cached, make the API request
        $plans = $this->makeRequest('GET', $url);

        // Cache the data for a specified duration (e.g., 1 hour)
        Cache::put($cacheKey, $plans, now()->addMinutes(5));

        return $plans;

//        $groupedPlans = $plansCollection->groupBy('network_operator');

//        if (preg_match('/(\d+)days/', $string, $matches)) {
//            $duration = $matches[1];
//            echo "Duration: $duration days\n";
//        } else {
//            echo "Duration not found in the string.\n";
//        }

//        if (preg_match('/(\d+(\.\d+)?)([MGT]B)/', $string, $matches)) {
//            $bundle = $matches[1];
//            $data_type = $matches[3];
//            echo "Bundle: $bundle $data_type\n";
//        } else {
//            echo "Bundle not found in the string.\n";
//        }
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

    protected function makeRequest(string $method, string $url, array $data = null, $headers = [])
    {
        $defaultHeaders = collect([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.$this->apiToken,
        ]);

        $response = Http::withHeaders($defaultHeaders->merge($headers)->toArray())->$method($url, $data)->throw();

        return $response->json();
    }
}
