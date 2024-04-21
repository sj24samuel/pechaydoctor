<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\pechaydiseasemodel;
use Illuminate\Http\Request;

class PechayDiseaseController extends Controller
{
    //show disease
    public function showdisease(){
        $data = pechaydiseasemodel::all();
        return view('administrator.diseasesfolder.index' , compact('data'));
    }
}
