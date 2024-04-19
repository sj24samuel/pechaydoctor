<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PechaySubstancesModel;

class RecommendationController extends Controller
{
    //
    public function treatmentd(){
        $data = PechaySubstancesModel::all();
        return view('recommendation', compact('data'));
    }
    public function calculate(Request $request){
        $data = PechaySubstancesModel::all();
        
        $SubstanceType = $request->input('SubstanceType');
        foreach ($data as $item) {
            // code...
            if ($SubstanceType == $item->id) {
                $dosage = $item->dosage_;
                $dbname = $item->name;
                $dunit = $item->dosage_unit;
            }
        }

        $dosagekg = $dosage / 1000;
        $Area = $request->input('area');
        $Unit = $request->input('unit');
        $hec = 0.0001;
        if ($Unit == 1) {
            $solve = $dosagekg * $Area;
            $result = 'Result of calculation for ' . $solve . ' '. 'Kg/sq.m' . ' of '.$dbname ;
            return view('recommendation', ['result' => $result], compact('data'));
        }
        elseif ($Unit == 2) {
            $convert = $Area / $hec;
            $solve = $dosagekg * $convert;
            $result = 'Result of calculation for ' . $solve . ' '. 'Kg/Hec' . ' of '.$dbname ;
            return view('recommendation', ['result' => $result],  compact('data'));
        }
    }
}
