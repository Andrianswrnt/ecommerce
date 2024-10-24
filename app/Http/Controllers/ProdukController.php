<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\barang;
use App\Models\Kategori;

class ProdukController extends Controller
{
    public function tampilkan($Id_Kategori)
    {
        $kategori = Kategori::findOrFail($Id_Kategori);
        
        $produks = barang   ::where('id_kategori', $Id_Kategori)->get();

        return view('produk.index', compact('kategori', 'produks'));
    }
}

