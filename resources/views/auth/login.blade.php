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

<body>


  <!--authentication-->

  <div class="mx-3 mx-lg-0">

  <div class="card my-5 col-xl-9 col-xxl-8 mx-auto rounded-4 overflow-hidden p-4">
    <div class="row g-4">
      <div class="col-lg-6 d-flex">
        <div class="card-body">
          <img src="{{ asset('frontend/assets/img/logo/LOGO.png') }}" alt="logo" style="max-width: 120px; ">
          <h4 class="fw-bold mt-4">Selamat Datang Di Green Shop</h4>
          <p class="mb-0">Silahkan Masukan Akun Anda</p>
          
          <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
            <form class="row g-3">
              <div class="col-12">
                <label for="inputEmailAddress" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmailAddress" placeholder="jhon@example.com" name="email">
              </div>
              <div class="col-12">
                <label for="inputChoosePassword" class="form-label">Password</label>
                <div class="input-group" id="show_hide_password">
                  <input type="password" class="form-control border-end-0" id="inputChoosePassword" value=""
                    placeholder="Enter Password" name="password">
                  <a href="javascript:;" class="input-group-text bg-transparent"><i
                      class="bi bi-eye-slash-fill"></i></a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                  <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                </div>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button type="submit" class="btn btn-grd-primary">Login</button>
                </div>
              </div>
              <div class="col-12">
                <div class="text-start">
                  <p class="mb-0">Don't have an account yet? <a href="{{route ('register')}}">Sign up here</a>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-6 d-lg-flex d-none">
        <div class="p-3 rounded-4 w-100 d-flex align-items-center justify-content-center bg-grd-succes">
          <img src="{{asset ('backend/assets/images/auth/login1.png')}}" class="img-fluid" alt="">
        </div>
      </div>

    </div><!--end row-->
  </div>

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