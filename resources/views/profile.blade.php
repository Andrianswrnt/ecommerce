<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .card-body {
            padding: 20px;
        }
        .form-control {
            font-size: 16px;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #4CAF50;
            border-color: #4CAF50;
            border-radius: 5px;
            padding: 10px 20px;
        }
        .btn-primary:hover {
            background-color: #45a049;
            border-color: #45a049;
        }
        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 0;
        }
        .breadcrumb-item {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('welcome') }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-user"></i> My Profile</h4>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><strong>Nama:</strong></td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Email:</strong></td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td><strong>No Telpon:</strong></td>
                                    <td>{{ $user->no_telp }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Alamat:</strong></td>
                                    <td>{{ $user->alamat }}</td>
                                </tr>
                                <tr>
                                    <td><strong>jenis kelamin:</strong></td>
                                    <td>{{ $user->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td><strong>tanggal lagir:</strong></td>
                                    <td>{{ $user->tanggal_lahir }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h4><i class="fas fa-pencil-alt"></i> Edit Profile</h4>
                        <form method="POST" action="{{ url('profile') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>
                                <div class="col-md-9">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-3 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-9">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_telp" class="col-md-3 col-form-label text-md-right">No telpon</label>
                                <div class="col-md-9">
                                    <input id="no_telp" type="text" class="form-control" name="no_telp" value="{{ $user->no_telp }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-md-3 col-form-label text-md-right">Alamat</label>
                                <div class="col-md-9">
                                    <textarea id="alamat" class="form-control" name="alamat" required>{{ $user->alamat }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenis_kelamin" class="col-md-3 col-form-label text-md-right">jk</label>
                                <div class="col-md-9">
                                    <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
                                        <option value="male" {{ $user->jenis_kelamin === 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ $user->jenis_kelamin === 'female' ? 'selected' : '' }}>Female</option>
                                        <option value="other" {{ $user->jenis_kelamin === 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal_lahir" class="col-md-3 col-form-label text-md-right">Date of Birth</label>
                                <div class="col-md-9">
                                    <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-3 col-form-label text-md-right">Password</label>
                                <div class="col-md-9">
                                    <input id="password" type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-3 col-form-label text-md-right">Confirm Password</label>
                                <div class="col-md-9">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-9 offset-md-3">
                                    <button type="submit" class="btn btn-primary">
                                        Save Changes
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
