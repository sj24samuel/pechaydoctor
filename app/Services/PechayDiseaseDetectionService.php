<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

// Import necessary libraries
use \Illuminate\Http\JsonResponse;
use \Illuminate\Http\UploadedFile;
use \App\Models\User;

use \Illuminate\Support\Facades\DB;

use \Carbon\Carbon;

// Import Keras
use \TensorFlow\Python\Keras\Models\load_model;
use \TensorFlow\Python\Keras\Models\predict;


class PechayDiseaseDetectionService
{
    protected $model;

    public function __construct()
    {
        // Load the pre-trained CNN model
        $modelPath = storage_path('app/public/models/pechay_disease_model.h5'); // Path to your model file
 // Adjust the path accordingly
        //require_once $modelFilePath;
        $this->model = CNNModelLoader::loadFromPath($modelPath); // Load your model using the appropriate method
    }

    public function detectDisease($image)
    {
        // Preprocess the image
        $preprocessedImage = $this->preprocessImage($image);

        // Perform inference
        $predictions = $this->model->predict($preprocessedImage);

        // Postprocess the predictions
        $diseaseDetected = $this->interpretPredictions($predictions);

        return $diseaseDetected;
    }

    protected function preprocessImage($image)
    {
        // Implement image preprocessing logic
         $img = Image::make($image);

        // This method should resize, normalize, and format the image appropriately
         $img->resize(224, 224); // Adjust dimensions as needed

        // Convert to grayscale (if necessary)
        // $img->greyscale();

        // Convert the image to an array suitable for passing to your model
        $preprocessedImage = $img->encode('jpg')->getEncoded();

        return $preprocessedImage;
    }

    protected function interpretPredictions($predictions)
    {
        // Define the disease classes your model can detect
        $diseaseClasses = ['Healthy', 'Mildew']; // Adjust as per your model

        // Find the index of the highest probability
        $maxIndex = array_search(max($predictions), $predictions);

        // Get the disease type based on the index
        $diseaseType = $diseaseClasses[$maxIndex];

        // Format the result
        $result = [
            'disease_type' => $diseaseType,
            'confidence' => $predictions[$maxIndex]
        ];

        return $result;
    }
}
