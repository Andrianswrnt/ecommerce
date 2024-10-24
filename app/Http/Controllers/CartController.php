<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\barang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
USE Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function add(Request $request, $id)
{
    $request->validate([
        'Jumlah' => 'required|integer|min:1',
    ]);

    $barang = Barang::find($id);
   
    $jumlah = $request->input('Jumlah');

    $barang->Stok -= $request->Jumlah;
    $barang->save();
    
    if ($jumlah > $barang->Stok) {
        return redirect()->back()->with('error', 'Jumlah yang diminta melebihi stok yang tersedia.');
    }
   

    if (!$barang) {
        return redirect()->back()->with('error', 'Barang not found!');
    }

    $Jumlah = $request->input('Jumlah');

    $cart = Cart::where('Id_User', Auth::id())->where('Id_Barang', $id)->first();

    if ($cart) {
        $cart->Jumlah += $Jumlah;
        $cart->save();
    } else {
        Cart::create([
            'Id_User' => Auth::id(),
            'Id_Barang' => $id,
            'Jumlah' => $Jumlah,
        ]);
    }

    return redirect()->back()->with('success', 'Produk Berhasil Ditambahkan Kekeranjang!');
}

    

public function index()
{
    $cart = Cart::where('Id_User', Auth::id())->with('barang')->get();

    $subtotal = 0;
    foreach ($cart as $item) {
        if ($item->barang) {
            $subtotal += $item->barang->Harga * $item->Jumlah;
        }
    }

    $total = $cart->sum(function($item) {
        return $item->barang ? $item->barang->Harga * $item->Jumlah : 0;
    });

    return view('cart', compact('cart', 'total', 'subtotal'));
}


public function update(Request $request, $id)
{
    $cartItem = Cart::find($id);
    if ($cartItem) {
        $cartItem->Jumlah = $request->quantity;
        $cartItem->save();
    }

    // Hitung ulang subtotal
    $subtotal = Cart::where('user_id', auth()->user()->id)->sum(DB::raw('Jumlah * Harga'));

    return redirect()->back()->with('subtotal', $subtotal);
}


public function delete($id)
{
    $item = Cart::find($id);
    
    if (!$item) {
        return redirect()->back()->with('error', 'Item tidak ditemukan');
    }
    
    $item->delete();
    
    return redirect()->back()->with('success', 'Item berhasil dihapus dari keranjang');


}
   

}