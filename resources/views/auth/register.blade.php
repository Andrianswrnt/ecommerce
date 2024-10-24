

<!doctype html>
<html lang="en" data-bs-theme="light-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Green Shop</title>
  <!--favicon-->
	<link rel="icon" href="{{asset ('backend/assets/images/favicon-32x32.png')}}" type="image/png">
  <!-- loader-->
	<link href="{{asset ('backend/assets/css/pace.min.css')}}" rel="stylesheet">
	<script src="{{asset ('backend/assets/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{asset ('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset ('backend/assets/plugins/metismenu/metisMenu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset ('backend/assets/plugins/metismenu/mm-vertical.css')}}">
  <!--bootstrap css-->
  <link href="{{asset ('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="{{asset ('backend/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="backend/sass/main.css" rel="stylesheet">
  <link href="backend/sass/dark-theme.css" rel="stylesheet">
  <link href="backend/sass/blue-theme.css" rel="stylesheet">
  <link href="backend/sass/responsive.css" rel="stylesheet">

  </head>

  <body class="bg-register">


    <!--authentication-->

     <div class="container-fluid my-5">
        <div class="row">
           <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-5 mx-auto">
            <div class="card rounded-4 mb-0 border-top border-3 border-primary border-gradient-1">
              <div class="card-body p-5">
                <img src="{{ asset('frontend/assets/img/logo/LOGO.png') }}" alt="logo" style="max-width: 120px; ">
                <h4 class="fw-bold">Selamat Datang Di Green Shop</h4>
                  <p class="mb-0">Buat Akun Anda</p>

                  <div class="form-body my-4">
                  <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="col-12 mb-3">                         
                               <label for="name" class="form-label">{{ __('Nama') }}</label>
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                       
                            <div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-grd-danger">{{ __('Register') }}</button>
												</div>
                        </div>
                    </form>
									</div>

                  <div class="separator section-padding">
                    <div class="line"></div>
                    <p class="mb-0 fw-bold">OR</p>
                    <div class="line"></div>
                  </div>

                  <div class="d-flex gap-3 justify-content-center mt-4">
                    <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-danger">
                      <i class="bi bi-google fs-5 text-white"></i>
                    </a>
                    <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-deep-blue">
                      <i class="bi bi-facebook fs-5 text-white"></i>
                    </a>
                    <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-info">
                      <i class="bi bi-linkedin fs-5 text-white"></i>
                    </a>
                    <a href="javascript:;" class="wh-42 d-flex align-items-center justify-content-center rounded-circle bg-grd-royal">
                      <i class="bi bi-github fs-5 text-white"></i>
                    </a>
                  </div>

              </div>
            </div>
           </div>
        </div><!--end row-->
     </div>
      
    <!--authentication-->




    <!--plugins-->
    <script src="{{asset ('backend/assets/js/jquery.min.js')}}"></script>

    <script>
      $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
          event.preventDefault();
          if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("bi-eye-slash-fill");
            $('#show_hide_password i').removeClass("bi-eye-fill");
          } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("bi-eye-slash-fill");
            $('#show_hide_password i').addClass("bi-eye-fill");
          }
        });
      });
    </script>
  
  </body>
</html>
