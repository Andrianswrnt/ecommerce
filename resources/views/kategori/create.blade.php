@extends('home')
@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Add kategori</h5>
            <form class="row g-3" method="POST" action="{{ route('kategori.store') }}">
                @csrf
                <div class="col-md-4x">
                    <label for="input13" class="form-label">Nama Kategori</label>
                    <div class="position-relative input-icon">
                        <input type="text" name="Nama_Kategori" class="form-control @error('Nama_Kategori') is-invalid @enderror" id="input13" value="{{ old('Nama_Kategori') }}" placeholder="Masukan Nama Kategori" required>
                        
                        @error('Nama_Kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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