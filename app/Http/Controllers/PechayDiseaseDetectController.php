<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\TensorFlowAPI;
use Illuminate\Http\Request;

class YourController extends Controller
{
    protected $tensorflowAPI;

    public function __construct(TensorFlowAPI $tensorflowAPI)
    {
        $this->tensorflowAPI = $tensorflowAPI;
    }

    public function predict(Request $request)
    {
        // Validate incoming request data if necessary

        $data = $request->all(); // Get input data from the request

        // Make prediction request to TensorFlow API
        $predictions = $this->tensorflowAPI->predict($data);

        // Process predictions and return response
        return response()->json($predictions);
    }
}
