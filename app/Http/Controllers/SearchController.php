<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang; // Sesuaikan dengan model produk Anda

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $barangs = barang::where('Nama_Barang', 'LIKE', "%{$query}%")
                            ->get();
        
        return view('search', compact('barangs'));
    }
}
