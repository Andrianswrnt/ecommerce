<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <style>
        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
        }
        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-header h1 {
            margin: 0;
        }
        .invoice-body {
            margin-bottom: 20px;
        }
        .invoice-footer {
            text-align: center;
            margin-top: 20px;
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="invoice-header">
            <h1>Invoice</h1>
            <p>GreenShop</p>
        </div>
        <div class="invoice-body">
            <p><strong>Nama:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Alamat:</strong> {{ $user->alamat }}</p>
            <p><strong>No. Telepon:</strong> {{ $user->no_telp }}</p>
            <p><strong>Metode Pembayaran:</strong> {{ $metode_pembayaran }}</p>
            <h3>Pesanan Anda</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $item)
                    <tr>
                        <td>{{ $item->barang->Nama_Barang }}</td>
                        <td>{{ $item->Jumlah }}</td>
                        <td>Rp.{{ $item->barang->Harga }}</td>
                        <td>Rp.{{ $item->barang->Harga * $item->Jumlah }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3">Subtotal</th>
                        <th>Rp.{{ $subtotal }}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="invoice-footer">
            <p>Terima kasih telah berbelanja di GreenShop!</p>
            <div class="back-button">
                <a href="{{ route('welcome') }}" class="btn btn-primary">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</body>
</html>
