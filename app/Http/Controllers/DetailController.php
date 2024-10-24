<?php

namespace App\Http\Controllers;
use App\Models\barang;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function tampilkan($id)
    {
        $barang = barang::findOrFail($id); 

        return view('detail', compact('barang'));
    }
}   
