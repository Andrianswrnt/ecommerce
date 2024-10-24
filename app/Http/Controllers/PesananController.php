<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class PesananController extends Controller
{
    public function add(Request $request)
    {
        $Id_Barang = $request->input('Id_Barang');
        $quantity = $request->input('quantity', 1);

        $barang = Barang::find($Id_Barang);

        if (!$barang) {
            return redirect()->back()->with('error', 'Barang tidak ditemukan');
        }

        $pesan = session()->get('pesan', []);
        
        if (isset($pesan[$Id_Barang])) {
            $pesan[$Id_Barang]['quantity'] += $quantity;
        } else {
            $pesan[$Id_Barang] = [
                "name" => $barang->Nama_Barang,
                "quantity" => $quantity,
                "price" => $barang->Harga,
                "photo" => $barang->Gambar
            ];
        }

        session()->put('pesan', $pesan);

        return redirect()->back()->with('success', 'Barang berhasil ditambahkan ke keranjang!');
    }
}
