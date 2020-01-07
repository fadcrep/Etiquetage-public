<?php

namespace App\Http\Controllers;

use App\Models\Laboratoire;
use App\Models\Typeproduit;
use Illuminate\Http\Request;

class LaboratoireController extends Controller
{
    public function laboratoiresList(Request $request){
        //$request->user()->authorizeRoles(['admin']);

        $laboratoires = Laboratoire::all();

        return view('back.laboratoire.laboratoire_index',compact('laboratoires'));
    }

    public function laboratoireNew(Request $request){
        //$request->user()->authorizeRoles(['admin']);



        $types = Typeproduit::all();

        return view('back.laboratoire.laboratoire_new',compact('types'));
    }
    public function laboratoireEdit($id, Request $request){

        //$request->user()->authorizeRoles(['admin']);

        $laboratoire = Laboratoire::find($id);

        $types = Typeproduit::all();

        if($laboratoire){
            $array = [];
            foreach ($laboratoire->typeproduits as $typeproduit){
                $array[] = $typeproduit->id;
            }
            $laboratoire->typeproduits = $array;
        }

        return view('back.laboratoire.laboratoire_edit',compact('laboratoire','types'));
    }

    public function laboratoireStore(Request $request){


        //$request->user()->authorizeRoles(['admin']);

        $request->validate([
            'name' => ['required', 'string','unique:laboratoires', 'max:255'],
            'description' => ['nullable', 'string', 'max:255'],
            'typeproduit' => [
                'required',
                function ($attribute, $value, $fail) {
                    foreach ($value as $val){
                        if (!Typeproduit::find($val)) {
                            $fail($attribute.' is invalid.');
                        }
                    }
                },
            ],

        ]);

        $labo = New Laboratoire();
        $labo->name = $request->name;
        $labo->description = $request->description;
        $labo->save();

        $labo->typeproduits()->attach($request->typeproduit);

        return redirect()->route('laboratoire.list')->with('success','Données enregistrées avec succès !');

    }

    public function laboratoireUpdate(Request $request,$id){

        //$request->user()->authorizeRoles(['admin']);
        $request->validate([
            'name' => ['required', 'string','max:255'],
            'description' => ['nullable', 'string', 'max:255'],
            'typeproduit' => [
                'required',
                function ($attribute, $value, $fail) {
                    foreach ($value as $val){
                        if (!Typeproduit::find($val)) {
                            $fail($attribute.' is invalid.');
                        }
                    }
                },
            ],
        ]);

        $labo = Laboratoire::find($id);

        $labo->name = $request->name;
        $labo->description = $request->description;
        $labo->save();

        $labo->typeproduits()->detach();
        $labo->typeproduits()->attach($request->typeproduit);




        return redirect()->route('laboratoire.list')->with('success','Données enregistrées avec succès !');

    }
}
