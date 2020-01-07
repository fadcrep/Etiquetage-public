<?php

namespace App\Http\Controllers;

use App\Models\Typeproduit;
use Illuminate\Http\Request;

class TypeProduitController extends Controller
{
    public function typesList(Request $request){
        //$request->user()->authorizeRoles(['admin']);

        $types = Typeproduit::all();

        return view('back.typeproduit.type_index',compact('types'));
    }

    public function typeNew(Request $request){
        //$request->user()->authorizeRoles(['admin']);

        return view('back.typeproduit.type_new');
    }
    public function typeEdit($id, Request $request){

        //$request->user()->authorizeRoles(['admin']);

        $type = Typeproduit::find($id);

        return view('back.typeproduit.type_edit',compact('type'));
    }

    public function typeStore(Request $request){

        //$request->user()->authorizeRoles(['admin']);

        $request->validate([
            'name' => ['required', 'string','unique:typeproduits', 'max:255'],
            'description' => ['nullable', 'string', 'max:255'],
        ]);

        Typeproduit::create($request->all());

        return redirect()->route('type.list')->with('success','Données enregistrées avec succès !');

    }

    public function typeUpdate(Request $request,$id){

        //$request->user()->authorizeRoles(['admin']);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:255'],
        ]);

        //Typeproduit::create($request->all());

        $type = Typeproduit::find($id);

        $type->update($request->all());


        return redirect()->route('type.list')->with('success','Données enregistrées avec succès !');

    }
}
