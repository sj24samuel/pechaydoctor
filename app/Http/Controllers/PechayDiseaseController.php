<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\pechaydiseasemodel;
use Illuminate\Http\Request;

class PechayDiseaseController extends Controller
{
    //show disease
    public function showdisease(){
        $data = pechaydieasemodel::all();
        return view('administrator.diseasefolder.index' , compact('data'));
    }
}
