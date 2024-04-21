<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PechaySubstancesModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class treatmentdosagecontroller extends Controller
{
    public function showtreatmentdosage(){
        $data = PechaySubstancesModel::all();
        return view('administrator.treatmentfolder.index', compact('data'));
    }
    public function showtreatmentview($id){
        $data = PechaySubstancesModel::find($id);
        return view('administrator.treatmentfolder.showtreatment', compact('data'));
    }
    public function showupdateview($id){
        $data = PechaySubstancesModel::find($id);
        return view('administrator.treatmentfolder.updatetreatment', compact('data'));
    }
    public function addnew(){
        return view('administrator.treatmentfolder.addnewtreatment');
    }
    public function addtreatment(Request $request){
        $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255|unique:users',
        'description' => 'required|string|max:255',
        'dosage_' => 'required|numeric',
        'dosage_unit' => 'required|string|max:255',
        'substance_type' => 'required|string|max:255',
        'applicaiton_measure' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/addnew')
                    ->withErrors($validator)
                    ->withInput()
                    ->with('Fail','Failed entry');
        }

        //$post = PechaySubstancesModel::create($validator);
        $post = new PechaySubstancesModel();
        $post->name = $request->name;
        $post->description = $request->description;
        $post->dosage_ = $request->dosage_;
        $post->dosage_unit = $request->dosage_unit;
        $post->substance_type = $request->substance_type;
        $post->applicaiton_measure = $request->application_measure;
        $post->save();

        // Optionally, you can return a response or redirect somewhere
        return redirect('administrator.treatmentfolder.index');
    }
}
