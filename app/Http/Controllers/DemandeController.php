<?php

namespace App\Http\Controllers;

use App\Models\Amende;
use App\Models\Demande;
use App\Models\Laboratoire;
use App\Models\Typeproduit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use MongoDB\BSON\Type;

class DemandeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function demandeList(){


        if(Auth::user()->roles->first()->name =='labo'){

            $demandes = Demande::where('laboratoire_id',Auth::user()
                ->laboratoire_id)->get()
            ;
        }
        elseif (Auth::user()->roles->first()->name =='inspecteur'){

            $array =['attente','amende'];

            $demandes = Demande::whereIN('statusidc',$array)->get();


        }elseif (Auth::user()->roles->first()->name =='aberme') {

            $demandes = Demande::where('user_id',Auth::user()->id)->get();

        }elseif (Auth::user()->roles->first()->name =='admin') {

            $demandes = Demande::all();
        }


        return view('back.demande.index',compact('demandes'));
    }


    public function demandeNew(){

        $types = Typeproduit::all();



        $laboarray = [];

        foreach ($types as $type){
            $typearray =[];
            foreach ($type->laboratoires as $laboratoire){
                $typearray[$laboratoire->id] = $laboratoire->name;
            }
            $laboarray[$type->id] = $typearray;

        }

        return view('back.demande.new',compact('types','laboarray'));
    }

    public function demandeShow($id){

        $demande = Demande::findorfail($id);

        return view('back.demande.show',compact('demande'));
    }

    public function demandeValidation($id ,Request $request){

        //dd($request->all());

        $demande = Demande::findorfail($id);

       /* $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:pdf',
        ]);*/

        $validator = Validator::make($request->all(), [
            'resultat' => 'required',
            'file' => 'required|file|mimes:pdf',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $file = $request['file'];
        $filename = time().'.'.$file->getClientOriginalExtension();
        $filePath = storage_path('app/public/demandepdf/');
        $file->move($filePath, $filename);


        $demande->status = $request->resultat;
        $demande->filepdf = $filename;
        $demande->save();

        return view('back.demande.show',compact('demande'));
    }

    public function demandeEdit($id){

        $demande = Demande::find($id);
        $types = Typeproduit::all();


        $typearray =[];

        $laboarray = [];

        foreach ($types as $type){
            foreach ($type->laboratoires as $laboratoire){
                $typearray[$laboratoire->id] = $laboratoire->name;
            }
            $laboarray[$type->id] = $typearray;

        }

        return view('back.demande.edit',compact('demande','types','laboarray'));
    }

    public function demandeStore(Request $request){

        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'nomdemandeur' => ['required', 'string', 'max:255'],
            'prenomdemandeur' => ['required', 'string', 'max:255'],
            'importateur' => ['required', 'string','max:255'],
            'guceref' => ['nullable', 'string','max:255'],
            'marque' => ['required', 'string','max:255'],
            'modele' => ['required', 'string','max:255'],
            'laboratoire_id' => ['required', 'integer','max:255'],
            'typeproduit_id' => ['required', 'integer','max:255'],

        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        $demande = new Demande();
        $demande->nomdemandeur = $request->nomdemandeur;
        $demande->prenomdemandeur = $request->prenomdemandeur;
        $demande->importateur = $request->importateur;
        $demande->guceref = $request->guceref;
        $demande->marque = $request->marque;
        $demande->modele = $request->modele;
        $demande->laboratoire_id = $request->laboratoire_id;
        $demande->typeproduit_id = $request->typeproduit_id;
        $demande->status = "encours";
        $demande->statusidc = "encours";
        $demande->user_id = Auth::user()->id;

        $demande->save();

        return redirect()->route('demande.list')->with('success','Données enregistrées avec succès !');

    }

    public function demandeUpdate(Request $request,$id){

        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'nomdemandeur' => ['required', 'string', 'max:255'],
            'prenomdemandeur' => ['required', 'string', 'max:255'],
            'importateur' => ['required', 'string','max:255'],
            'guceref' => ['nullable', 'string','max:255'],
            'marque' => ['required', 'string','max:255'],
            'modele' => ['required', 'string','max:255'],
            'laboratoire_id' => ['required', 'integer','max:255'],
            'typeproduit_id' => ['required', 'integer','max:255'],

        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $demande = Demande::find($id);

        $demande->nomdemandeur = $request->nomdemandeur;
        $demande->prenomdemandeur = $request->prenomdemandeur;
        $demande->importateur = $request->importateur;
        $demande->guceref = $request->guceref;
        $demande->marque = $request->marque;
        $demande->modele = $request->modele;
        $demande->laboratoire_id = $request->laboratoire_id;
        $demande->typeproduit_id = $request->typeproduit_id;
        $demande->user_id = Auth::user()->id;

        $demande->save();

        return redirect()->route('demande.list')->with('success','Données enregistrées avec succès !');

    }

    public function demandeDelete($id)
    {
        $demande = Demande::find($id);
        $demande->delete();

        return redirect(route('demande.list'));
    }

    public function demandeAmende(Request $request, $id)
    {
        $request->validate([
            'montant' => ['required', 'regex:/^[0-9]+(\.[0-9][0-9]?)?$/'],
            'description' => ['nullable', 'string', 'max:255'],
        ]);

        $amende = new  Amende();
        $amende->demande_id = $id;
        $amende->montant = $request->montant;
        $amende->description = $request->description;
        $amende->user_id = Auth::user()->id;
        $amende->save();

        $demande = Demande::find($id);
        $demande->statusidc = 'amende';
        $demande->save();

        return redirect()->route('demande.list')->with('success','Amende enregistrée avec succès !');

    }

    public function demandeStatusChange( Request $request, $id)
    {
        $demande = Demande::find($id);
        $demande->statusidc ='attente';
        $demande->save();

        return redirect()->route('demande.list')->with('success','Demande soumise  avec succès !');

    }


}
