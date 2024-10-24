@extends('home')
@section('content')
<h6 class="mb-0 text-uppercase">ACCESS CONTROL LIST</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="col-lg-2">
            <a href="{{ route('kategori.create') }}" class="btn btn-success px-4 raised d-flex gap-2">
                <i class="material-icons-outlined">account_circle</i>
                Add kategori
            </a>
        </div>
        <table class="table mb-0 table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama kategori</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $data)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $data->Nama_Kategori }}</td>
                    <td>
                        <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-warning px-5">Edit</a>
                        <a class="btn ripple btn-danger px-5" href="#" onclick="event.preventDefault();
                            document.getElementById('destroy-form-{{ $data->id }}').submit();">
                            Hapus
                        </a>

                        <form id="destroy-form-{{ $data->id }}" action="{{ route('kategori.destroy', $data->id) }}" method="POST" class="d-none">
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
