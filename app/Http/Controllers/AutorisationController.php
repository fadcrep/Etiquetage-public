<?php

namespace App\Http\Controllers;

use App\Imports\ImportationsImport;
use App\Models\Importation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class AutorisationController extends Controller
{
    public function autorisationList(){
        $importations = Importation::all();
        return view('back.autorisation.index',compact('importations'));
    }

    public function autorisationNew(){
        return view('back.autorisation.new');
    }

    public function autorisationImport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'excelfile' => ['required'],

        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }



        if($request->hasFile('excelfile')){
            Excel::import(new ImportationsImport(), request()->file('excelfile'));
            return redirect()->route('importation.list')->with('success','Données importées avec succès !');

        }

        return back();
    }
}
