<?php

namespace App\Http\Controllers;

use App\Mail\MerchantConfirmationMail;
use App\Models\Marchand;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Yoeunes\Toastr\Facades\Toastr;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    //


    public function addDemande(Request $request){

        $marchandExist=Marchand::where('email',$request->email)->first();
        if($marchandExist){

          toastr()->error("Informations déjà existante");
            return back();
        }
        $marchand=new Marchand();
        $marchand->name=$request->name;
        $marchand->prenom=$request->prenom;
        $marchand->email=$request->email;
        $marchand->status="demande";

        if($request->password != $request->confirm_password){

            toastr()->warning("Mots de passe incompatible ");
            return back();
        }
        $marchand->password=Hash::make($request->password);
        $marchand->save();
        toastr()->success("Vos informations on été soumis à notre service vous ! Consulter vos emails");

        return back();
    }


    public function dashboard(){
        $demande=Marchand::where('status','demande')->count();
        $marchandActive=Marchand::where('status','active')->count();
        $user= Auth::user();
        return view("admin.home",compact("marchandActive","demande","user"));
    }


    public function listes_demandeAdmin(){

        $demandeAll=Marchand::where('status','demande')->get();

       // dd($demandeAll);
        return view("admin.listes_demande",compact('demandeAll'));
    }


    public function listes_client(){

        $demandeAll=Marchand::where('status','active')->paginate(10);


        return view("admin.listes_client",compact('demandeAll'));
    }

    public function activeCompte($id){


        $marchandActive=Marchand::find($id);
        if(!$marchandActive){
            toastr()->error("Marchand inexistant ou supprimer de la base de données");

            return back();
        }
        $marchandActive->status="active";
        $marchandActive->api_key = Str::random(40); // Utilisation de Str::random pour générer une clé API unique et sécurisée
        //Mail::to($marchandActive->email)->send(new MerchantConfirmationMail($marchandActive));

        $marchandActive->save();

        toastr()->error("Compte activé avec succès");

        return back();
    }

    public function login(){


        return view("admin.login");
    }

    public function doLogin(Request $request){
        $credentials = $request->only('email', 'password'); // Extraire uniquement les champs email et password

        if (!Auth::attempt($credentials)) {
            toastr()->error("Email ou mot de passe incorrect");
            return redirect()->back(); // Rediriger en arrière si l'authentification échoue
        }

        return redirect()->route('home.admin');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Déconnecte l'utilisateur

        $request->session()->invalidate(); // Invalide la session
        $request->session()->regenerateToken(); // Régénère le token CSRF

        return redirect('/'); // Redirige vers la page d'accueil ou une autre page
    }
}
