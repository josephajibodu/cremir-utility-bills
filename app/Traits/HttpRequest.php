<?php

use Illuminate\Support\Facades\Http;

trait HttpRequest
{
    protected function makeRequest(string $method, string $url, ?array $data = null, $headers = [])
    {
        $authorization = $this->getAuthorization();

        $defaultHeaders = collect([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => $authorization,
        ]);

        $response = Http::withHeaders($defaultHeaders->merge($headers)->toArray())->$method($url, $data)->throw();

        return $response->json();
    }
}
