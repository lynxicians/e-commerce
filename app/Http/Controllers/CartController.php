<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        $produks = Produk::all();

        return view('cart.cart', compact('produks'));
    }

    // public function storeProduct(Request $request){

    //     $produk = new Produk();

    //     $produk->ProductCode = $request->ProductCode;
    //     $produk->ProductName = $request->ProductName;
    //     $produk->Quantity = $request->Quantity;
    //     $produk->Price = $request->Price;

    //     $produk->save();
    //     return redirect()->intended(route('dashboard'));
    // }
}
