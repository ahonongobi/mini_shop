<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class PromoController extends Controller
{
    // ajouterpromo
    public function ajouterpromo()
    {
        return view('admin.ajouterpromo');
    }
    // addpromo
    public function addpromo(Request $request)
    {
        $promo = new \App\Models\Promo();
        $promo->reduction = $request->input('promo');
        $promo->date_debut = $request->input('date_debut');
        $promo->date_fin = $request->input('date_fin');
        $promo->code = rand(1000, 9999);
        $promo->save();
        return redirect()->back()->with('success', 'Promo ajoutée avec succès');
    }

    // applypromo
    public function applypromo(Request $request)
    {
        $reduction = $request->input('promo');
        $promo = \App\Models\Promo::where('reduction', $request->input('promo'))->first();
        
        $promo = Product::where('code', $request->input('code_product'))->first();
        $promo->prix_promo = $promo->prix - ($promo->prix * $reduction / 100);
        $promo->date_debut = $promo->date_debut;
        $promo->date_fin = $promo->date_fin;
        $promo->update();

        return redirect()->back()->with('success', 'Promo appliquée avec succès');
        
    }
}
