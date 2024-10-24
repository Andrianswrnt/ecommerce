@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $kategori->Nama_Kategori }}</h1>
    <div class="row">
        @foreach($produks as $produk)
        <div class="col-md-4">
            <div class="card mb-4">
                <img class="card-img-top" src="{{ asset('storage/' . $produk->image) }}" alt="{{ $produk->nama_produk }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                    <p class="card-text">{{ $produk->deskripsi }}</p>
                    <p class="card-text">{{ $produk->harga }}</p>
                    <a href="{{ route('produk.show', $produk->id) }}" class="btn btn-primary">Detail Produk</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
