<?php


namespace App\Services;

use GuzzleHttp\Client;

class DistanceMatrixService
{
    public function calculateDistanceMatrix($addresses)
    {

        $client = new Client([
            'verify' => false,
        ]);
        $baseUri = 'https://api.openrouteservice.org/v2/matrix/driving-car';
        $apiKey = '5b3ce3597851110001cf6248fdb995bc87c3455dae7d6a70cda92bbe'; // Get your API key from OpenRouteService

        $locations = [];
        foreach ($addresses as $address) {
            $locations[] = [$address->longitude, $address->latitude];
        }

        $response = $client->post($baseUri, [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'locations' => $locations,
                'metrics' => ['distance'],
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}

