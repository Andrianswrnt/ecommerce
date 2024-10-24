<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\barang;
use App\Models\Cart;

class CheckoutController extends Controller
{
    public function show()
    {
        // Mengambil data keranjang belanja pengguna yang sedang login
        $user = auth()->user();
        $cart = Cart::where('Id_User', $user->id)->get();
        $subtotal = 0;
    
        // Hitung subtotal
        foreach ($cart as $item) {
            $subtotal += $item->barang->Harga * $item->Jumlah;
        }
    
        return view('checkout', compact('cart', 'subtotal'));
    }
    

    public function process(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'metode_pembayaran' => 'required|string',

            
            
        ]);

        session(['metode_pembayaran' => $request->metode_pembayaran]);


        // Mengambil user yang sedang login
        $user = User::find(auth()->id());

        // Mengupdate data pengguna
        $user->name = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->no_telp = $request->no_telp;
        $user->save();

        // Ambil data keranjang belanja
        $cart = Cart::where('Id_User', $user->id)->get();
        $subtotal = 0;

        foreach ($cart as $item) {
            $subtotal += $item->barang->Harga * $item->Jumlah;
        }

        // Redirect ke halaman invoice
        return redirect()->route('checkout.invoice')->with([
            'cart' => $cart,
            'subtotal' => $subtotal,
            'user' => $user,
            'metode_pembayaran' => session('metode_pembayaran'), // Pass payment method to the view

            
        ]);
    }

    public function showInvoice(Request $request)
    {
        // Mengambil data dari session
        $cart = session('cart');
        $subtotal = session('subtotal');
        $user = session('user');
        $metode_pembayaran = session('metode_pembayaran');

        // Tampilkan halaman invoice
        return view('invoice', compact('cart', 'subtotal', 'user', 'metode_pembayaran'));
    }
}
