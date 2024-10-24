<?php

namespace App\Http\Controllers;

use App\Http\Middleware\IsAdmin;
use App\Models\barang;
use App\Models\kategori;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    public function index()
    {
        $barang = barang::orderBy('id', 'desc')->get();
        return view('barang.index', compact('barang'));
    }

    // ProductController.php
    public function filter(Request $request)
    {
        $kategoriNama = $request->input('Nama_Kategori');
        if ($kategoriNama) {
            $kategori = Kategori::where('Nama_Kategori', $kategoriNama)->first();
            if ($kategori) {
                $barang = Barang::where('Id_Kategori', $kategori->id)->orderBy('id', 'desc')->get();
            } else {
                $barang = collect(); // Empty collection if category not found
            }
        } else {
            $barang = Barang::orderBy('id', 'desc')->get();
        }
    
        $kategori = Kategori::all();
        return view('produk', compact('barang', 'kategori', 'kategoriNama'));
    }
    

    

    public function create()
    {
        $kategori = Kategori::all();

        return view('barang.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama_Barang' => ['required', 'string', 'max:255'],
            'Id_Kategori' => ['required', 'integer'],
            'Stok' => ['required', 'integer'],
            'Harga' => ['required', 'numeric'],
            'Gambar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'Deskripsi' => ['required', 'string'],
        ]);

        $barang = new Barang();
        $barang->Nama_Barang = $request->Nama_Barang;
        $barang->Id_Kategori = $request->Id_Kategori;
        $barang->Stok = $request->Stok;
        $barang->Harga = $request->Harga;
        $barang->Deskripsi = $request->Deskripsi;

        if ($request->hasFile('Gambar')) {
            $img = $request->file('Gambar');
            $name = time().'_'.$img->getClientOriginalName();
            $img->move(public_path('images/barang'), $name);
            $barang->Gambar = $name;
        }

        $barang->save();

        return redirect()->route('barang.index')->with('success', 'Barang created successfully.');
    }

   // App\Http\Controllers\BarangController.php






   public function show($id)
   {
       $barang = Barang::findOrFail($id);
       return view('detail', compact('barang'));
   }
   


    public function edit(Barang $barang)
    {
        $kategori = Kategori::all();
        return view('barang.edit', compact('barang', 'kategori'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'Nama_Barang' => ['required', 'string', 'max:255'],
            'Id_Kategori' => ['required', 'integer'],
            'Stok' => ['required', 'integer'],
            'Harga' => ['required', 'numeric'],
            'Deskripsi' => ['required', 'text'],
            'Gambar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $barang->update([
            'Nama_Barang' => $request->Nama_Barang,
            'Id_Kategori' => $request->Id_Kategori,
            'Stok' => $request->Stok,
            'Harga' => $request->Harga,
            'Deskripsi' => $request->Deskripsi
        ]);

        if ($request->hasFile('Gambar')) {
            $img = $request->file('Gambar');
            $name = time().'_'.$img->getClientOriginalName();
            $img->move(public_path('images/barang'), $name);
            $barang->update(['Gambar' => $name]);
        }

        return redirect()->route('barang.index')->with('success', 'Barang updated successfully.');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang deleted successfully.');
    }
}
