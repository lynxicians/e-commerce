<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Penjualan;
use Auth;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function order($ProductID)
    {
        $produk = Produk::where('ProductID', $ProductID)->first();

        return view('order.order', compact('produk'));
    }
  
    public function pesan(Request $request, $ProductID)
    {
        $produk = Produk::where('ProductID', $ProductID)->first();
        $produk->Quantity -= $request->input('quantity');
        $produk->save();
        $DateOrder = Carbon::now();

        //validate if more than quatity
        if($request->order_quantity > $produk->Quantity )
        {
            return response()->json(['error' => 'Order quantity exceeds available stock.'], 400);
        }


        //save to penjualan database 
        $penjualan = new Penjualan;
        $penjualan->users_id = Auth::user()->id;
        $penjualan->product_id = $produk->ProductID;
        $penjualan->DateOrder = $DateOrder;
        $penjualan->Quantity =  $request->input('quantity');

        $penjualan->save();

        return response()->json(['success' => true, 'message' => 'Order placed successfully.'], 200);
    }
}
