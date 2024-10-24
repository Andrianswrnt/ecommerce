<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Checkout - GreenShop</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.min.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/spacing.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
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

   <!-- header-area-start -->
   @include('include.frontend.header')
   <!-- header-area-end -->

   <!-- main-area-start -->
   <main>

      <!-- breadcrumb-area -->
      <section class="breadcrumb_area pt-60 pb-60 tp-breadcrumb_bg" data-background="{{ asset('frontend/assets/img/banner/breadcrumb-01.jpg') }}">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                  <div class="tp-breadcrumb">
                     <div class="tp-breadcrumb__link mb-10">
                        <span class="breadcrumb-item-active"><a href="{{ route('welcome') }}">Home</a></span>
                        <span> Checkout</span>
                     </div>
                     <h2 class="tp-breadcrumb__title">Checkout</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->

      <!-- checkout area -->
      <div class="checkout-area pt-80 pb-80 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <form action="{{ route('checkout.process') }}" method="POST">
                     @csrf
                     <div class="row">
                        <div class="col-md-6">
                           <div class="checkout-form-list">
                              <label>Nama <span class="required">*</span></label>
                              <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="checkout-form-list">
                              <label>Email <span class="required">*</span></label>
                              <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="checkout-form-list">
                              <label>No. Telepon <span class="required">*</span></label>
                              <input type="tel" name="no_telp" value="{{ old('no_telp', auth()->user()->no_telp) }}" required>
                           </div>
                        </div>
                        <div class="col">
                           <div class="checkout-form-list">
                              <label>Alamat <span class="required">*</span></label>
                              <input type="text" name="alamat" value="{{ old('alamat', auth()->user()->alamat) }}" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="checkout-form-list mt-30">
                               <label>Metode Pembayaran <span class="required">*</span></label>
                               <select name="metode_pembayaran" class="nice-select" required>
                                   <option value="Dana">Dana</option>
                                   <option value="OVO">OVO</option>
                                   <option value="Gopay">Gopay</option>
                                   <option value="Shopee Pay">Shopee Pay</option>
                                   <option value="Bank BRI">Bank BRI</option>
                                   <option value="Bank BCA">Bank BCA</option>
                                   <option value="Bank QRIS">Bank QRIS</option>
                               </select>
                           </div>
                       </div>
                       
                     </div>
                     
                     <!-- Metode Pembayaran -->
                    
                     <!-- End Metode Pembayaran -->

                     <!-- order-details -->
                     <div class="card mt-30" style="max-width: 400px;">
                        <div class="card-body">
                           <div class="order-details">
                              <h3>Pesanan Anda</h3>
                              <div class="order-table table-responsive mb-30">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th>Produk</th>
                                          <th>Total</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @php
                                          $subtotal = 0;
                                       @endphp
                                       @foreach ($cart as $item)
                                          <tr>
                                             <td>
                                                <div class="product-details">
                                                   <div class="product-name">
                                                      <a href="#">{{ $item->barang->Nama_Barang }}</a>
                                                      <span><strong> x {{ $item->Jumlah }}</strong></span>
                                                   </div>
                                                </div>
                                             </td>
                                             <td>Rp.{{ $item->barang->Harga * $item->Jumlah }}</td>
                                          </tr>
                                          @php
                                             $subtotal += $item->barang->Harga * $item->Jumlah;
                                          @endphp
                                       @endforeach
                                    </tbody>
                                    <tfoot>
                                       <tr class="order-total">
                                          <th>Total</th>
                                          <td><strong>Rp.{{ $subtotal }}</strong></td>
                                       </tr>
                                    </tfoot>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- order-details end -->

                     <div class="order-button-payment mt-20">
                        <button type="submit" class="tp-btn tp-color-btn tp-wish-cart banner-animation">Proses Checkout</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- checkout area end-->

   </main>
   <!-- main-area-end -->

   <!-- footer-area-start -->
   @include('include.frontend.footer')
   <!-- footer-area-end -->

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
   <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/meanmenu.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>
