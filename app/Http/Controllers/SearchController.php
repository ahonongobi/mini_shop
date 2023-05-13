<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function search(Request $request)
    {
        $search = $request->input('search2');
        // make the reuqtes based on libelle, or description, or prix, or prix_promo
        $products = Product::where('libelle', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%")
            ->orWhere('prix', 'like', "%$search%")
            ->orWhere('prix_promo', 'like', "%$search%")
            ->get();
        return view('shop', compact('products'));
    }
}
