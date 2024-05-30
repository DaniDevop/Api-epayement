<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paydunya\Setup;
use Paydunya\Checkout\CheckoutInvoice;
use App\Models\Paiement;
use App\Models\Marchand;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class PaiementController extends Controller
{
    public function pay(Request $request){
        $api_key = $request->input('api_key');
        $compte = $request->input('compte');
        $montant = $request->input('montant');

        $marchand = Marchand::where('api_key', $api_key)->first();

        if (!$marchand) {
            toastr()->error("Informations incorrecct");

            return back();
        }
        $paiement=new Paiement();
        $paiement->marchand_id=$marchand->id;
        $paiement->amount=$montant;
        $paiement->pays="Carte-de-credit";

        $paiement->stripe_charge_id=Str::random(40);
        $paiement->save();
        toastr()->success("Tansaction effectué avec sucess");

        return back();
    }
}


