<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GreenShop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/favicon.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">

    <style>
        .custom-img-size {
            width: 100%; /* Menyesuaikan gambar dengan lebar kolom */
            height: 350px; /* Menyesuaikan tinggi gambar sesuai kebutuhan */
            object-fit: cover; /* Menjaga proporsi gambar */
        }
    </style>
    

</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    {{-- header --}}
    @include('include.frontend.header')
    {{-- header end --}}

    <!-- breadcrumb-area -->
    <section class="breadcrumb__area pt-60 pb-60 tp-breadcrumb__bg"
        data-background="assets/img/banner/breadcrumb-01.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                    <div class="tp-breadcrumb">
                        <div class="tp-breadcrumb__link mb-10">
                            <span class="breadcrumb-item-active"><a href="{{ route('welcome') }}">Home</a></span>
                            <span>Shop Details</span>
                        </div>
                        <h2 class="tp-breadcrumb__title">Shop Details</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- product-area-start -->
    <section class="product-area pb-65">
        <div class="container">
            @php $i = 0; @endphp
            @foreach ($barang as $data)
                @if($i % 4 == 0)
                    <div class="row">
                @endif
                <div class="col-md-3">
                    <div class="tpproduct tpproductitem mb-15 p-relative">
                        <div class="tpproduct__thumb">
                            <div class="tpproduct__thumbitem p-relative">
                                <a href="{{ route('detail', ['id' => $data->id]) }}">
                                    <img class="custom-img-size" src="{{ asset('images/barang/' . $data->Gambar) }}" alt="product-thumb">
                                    <img class="thumbitem-secondary custom-img-size">
                                </a>
                                <div class="tpproduct__thumb-bg">
                                    <div class="tpproductactionbg">
                                        <a href="{{ route('detail', ['id' => $data->id]) }}"><i class="fal fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tpproduct__content-area">
                            <h3 class="tpproduct__title mb-5"><a href="shop-details.html">{{ $data->Nama_Barang }}</a></h3>
                            <div class="tpproduct__priceinfo p-relative">
                                <div class="tpproduct__ammount">
                                    <span>Rp.{{ $data->Harga }}</span>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
                @php $i++; @endphp
                @if($i % 4 == 0 || $loop->last)
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    
    <!-- product-area-end -->

    {{-- footer --}}
    @include('include.frontend.footer')
    {{-- footer end --}}


    <!-- JS here -->
    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
