<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AdminContorller extends Controller
{
    //

    public function showTestAPI(){
        return view('administrator.testconnectionapi');
    }

    public function connectToApi()
    {
        $client = new Client();
        
        try {
            $response = $client->request('GET', 'localhost');
            $statusCode = $response->getStatusCode();
            
            if ($statusCode == 200) {
                $responseData = json_decode($response->getBody(), true);
                // Process the response data as needed
                return response()->json(['data' => $responseData], 200);
            } else {
                return response()->json(['error' => 'Failed to connect to API'], $statusCode);
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
