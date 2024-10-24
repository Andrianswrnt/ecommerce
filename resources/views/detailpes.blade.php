<!-- resources/views/cart/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Keranjang Belanja</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(count($cart) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $item)
                <tr>
                    <td><img src="{{ asset('images/barang/' . $item['gambar']) }}" alt="{{ $item['nama'] }}" width="50"></td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>Rp.{{ number_format($item['harga']) }}</td>
                    <td>Rp.{{ number_format($item['harga'] * $item['quantity']) }}</td>
                    <td>
                        <!-- Aksi seperti hapus item dari keranjang bisa ditambahkan di sini -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Keranjang Anda kosong.</p>
    @endif
</div>
@endsection
