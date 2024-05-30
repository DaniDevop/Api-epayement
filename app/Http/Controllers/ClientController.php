<?php

namespace App\Http\Controllers;

use App\Models\Marchand;
use App\Models\Paiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ClientController extends Controller
{
    //




    public function paiement($id){

        $marchand=Marchand::where('api_key',$id)->first();

        if(!$marchand){
            abort(403); // Rediriger en arrière si l'authentific
        }
        return view("payement",compact('marchand'));
    }


    public function home(){

        $marchand=session()->get('marchand');
        if(! $marchand){
            toastr()->error("Veuillez vous connecter");
            return redirect()->route('login.client'); // Rediriger en arrière si l'authentific
        }

        $transaction=Paiement::where('marchand_id', $marchand['id'])-> paginate(5);
        return view("client.transaction",compact('transaction','marchand'));


    }


    public function transaction(){

        $marchand=session()->get('marchand');
        if(! $marchand){
            toastr()->error("Veuillez vous connecter");
            return redirect()->route('login.client'); // Rediriger en arrière si l'authentific
        }

        $transaction=Paiement::all();
        return view("client.transaction",compact('transaction','marchand'));
    }


    public function loginClient(){

        return view("client.login");
    }



    public function doLogin(Request $request){


        $marchand=Marchand::where('email',$request->email)->first();
        if(!$marchand){

            toastr()->error("Email ou mot de passe incorrect");
            return redirect()->back(); // Rediriger en arrière si l'authentific
        }

        if(!Hash::check($request->password,$marchand->password)){
            toastr()->error("Email ou mot de passe incorrect");
            return redirect()->back(); // Red
        }

        $request->session()->put('marchand',$marchand);


        return redirect()->route('clients.home');

    }


    public function logoutClient(){

        session()->forget('marchand');
        session()->invalidate();
        session()->regenerateToken();
        return view("client.login");

    }


    public function newClientKey($id){

        $marchand=Marchand::find($id);
        if(!$marchand){
            toastr()->error("Veuillez vous connecter");
            return redirect()->route('login.client'); // Rediriger en arrière si l'authentific
        }
        $marchand->api_key=Str::random(40).$marchand->id;
        session()->forget('marchand');
        session()->put('marchand',$marchand);

        $marchand->save();
        toastr()->info("Api kye changé avec succèss");

        return back();
    }

    public function modifyCompte(Request $request){

        $marchand=Marchand::find($request->id);
        if(!$marchand){
            toastr()->error("Veuillez vous connecter");
            session()->forget('marchand');
            session()->invalidate();
            session()->regenerateToken();
            return redirect()->route('login.client'); // Rediriger en arrière si l'authentific

        }


        $marchand->numero_compte=$request->compte;
        $marchand->save();
        toastr()->success("Informations modifié avec success !");

        return back();
    }
}
