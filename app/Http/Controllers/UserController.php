<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Importation;
use App\Models\Laboratoire;
use App\Models\Mutation;
use App\Models\Parcelle;
use App\Models\Proprietaire;
use App\Models\Quartier;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('home');
    }

    public function home(){

        if(Auth::user()){
            return redirect()->route('dashboard');
        }else{
            return view('front.home');
        }

    }

    public function dashboard(){

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

        $importations = Importation::all();

        return view('back.users.dashboard',compact('demandes','importations'));
    }

    public function userslist(Request $request){
        $request->user()->authorizeRoles(['admin']);

        $users = User::all();

        return view('back.users.users_index',compact('users'));
    }

    public function userNew(Request $request){
        $request->user()->authorizeRoles(['admin']);

        $laboratoires = Laboratoire::all();
        $roles = Role::all();

        return view('back.users.users_new',compact('roles','laboratoires'));
    }
    public function userEdit($id, Request $request){

        $request->user()->authorizeRoles(['admin']);

        $user = User::find($id);

        return view('back.users.users_edit',compact('user'));
    }

    public function userStore(Request $request){

        //dd($request->all());

        $request->user()->authorizeRoles(['admin']);

        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }


        $user = User::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'laboratoire_id' => $request['laboratoire'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $user->roles()->attach(Role::where('id', $request['profil'])->first());

        return redirect()->route('users.list')->with('success','Données enregistrées avec succès !');

    }

    public function userUpdate(Request $request,$id){

        $request->user()->authorizeRoles(['admin']);

        $validator = Validator::make($request->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $user = User::find($id);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->password = Hash::make($request['password']);

        $user->save();
        $user->roles()->attach(Role::where('name', $request['profil'])->first());

        return redirect()->route('users.list')->with('success','Données enregistrées avec succès !');

    }
}
