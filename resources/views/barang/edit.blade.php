@extends('home')
@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Edit barang {{ $barang->Nama_Barang }}</h5>
            <form class="row g-3" method="POST" action="{{ route('barang.update', $barang->id) }}">
                @method('PATCH')
                @csrf
                <div class="col-md-12">
                    <label for="Nama_Barang" class="form-label">Nama Barang</label>
                    <div class="position-relative input-icon">
                        <input type="text" name="Nama_Barang" class="form-control @error('Nama_Barang') is-invalid @enderror" id="Nama_Barang" value="{{ old('Nama_Barang') }}" placeholder="Masukan Nama Barang" required>
                        @error('Nama_Barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="Id_Kategori" class="form-label">Nama Kategori</label>
                    <div class="position-relative input-icon">
                        <select name="Id_Kategori" class="form-control @error('Id_Kategori') is-invalid @enderror" id="Id_Kategori" required>
                            @foreach ($kategori as $data)
                                <option value="{{ $data->id }}">{{ $data->Nama_Kategori }}</option>
                            @endforeach
                        </select>
                        @error('Id_Kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="Stok" class="form-label">Stok Barang</label>
                    <div class="position-relative input-icon">
                        <input type="number" name="Stok" class="form-control @error('Stok') is-invalid @enderror" value="{{ old('Stok') }}" id="Stok" placeholder="Stok" required>
                        @error('Stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="Deskripsi" class="form-label">Deskripsi Barang</label>
                    <div class="position-relative input-icon">
                        <input type="text" name="Deskripsi" class="form-control @error('Deskripsi') is-invalid @enderror" value="{{ old('Deskripsi') }}" id="Deskripsi" placeholder="Deskripsi" required>
                        @error('Stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="Harga" class="form-label">Harga Barang</label>
                    <div class="position-relative input-icon">
                        <input type="number" name="Harga" class="form-control @error('Harga') is-invalid @enderror" value="{{ old('Harga') }}" id="Harga" placeholder="Harga" required>
                        @error('Harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="Gambar" class="form-label">Gambar Produk</label>
                    <input type="file" class="form-control @error('Gambar') is-invalid @enderror" name="Gambar" id="Gambar">
                    @error('Gambar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

