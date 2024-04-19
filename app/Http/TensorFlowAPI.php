<?php

namespace App\Http;

use GuzzleHttp\Client;

class TensorFlowAPI
{
    protected $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => 'http://your_tensorflow_api_url', // Replace with your TensorFlow API base URL
            'timeout'  => 5, // Adjust timeout as needed
        ]);
    }

    public function predict($data)
    {
        try {
            $response = $this->httpClient->post('/predict', [
                'json' => $data,
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            // Handle exceptions (e.g., connection errors)
            return ['error' => $e->getMessage()];
        }
    }
}
