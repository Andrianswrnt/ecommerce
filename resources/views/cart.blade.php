<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>GreenShop</title>
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

   <!-- header-cart-start -->
 
   <!-- header-cart-end -->

   <!-- main-area-start -->
   <main>

      <!-- breadcrumb-area -->
      <section class="breadcrumb_area pt-60 pb-60 tp-breadcrumb_bg" data-background="assets/img/banner/breadcrumb-01.jpg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                  <div class="tp-breadcrumb">
                     <div class="tp-breadcrumb__link mb-10">
                        <span class="breadcrumb-item-active"><a href="{{ route('welcome') }}">Home</a></span>
                        <span> Pesanan Saya</span>
                     </div>
                     <h2 class="tp-breadcrumb__title">Pesanan saya</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- breadcrumb-area-end -->
          
      <!-- cart area -->
      <div class="cart-area pt-80 pb-80 wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".2s">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <form action="{{ route('checkout.process') }}" method="POST">
                     @csrf
                     <div class="table-content table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th class="product-thumbnail">Images</th>
                                 <th class="cart-product-name">Nama Produk</th>
                                 <th class="product-price">Harga Satuan</th>
                                 <th class="product-quantity">Jumlah</th>
                                 <th class="product-subtotal">Total</th>
                                 <th class="product-add-to-cart">Check Out</th>
                                 <th class="product-remove">Hapus</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach ($cart as $item)
                              @if ($item->barang)
                              <tr data-item-id="{{ $item->id }}">
                                 <td class="product-thumbnail">
                                    <a href="shop-details.html">
                                       <img src="{{ asset('images/barang/' . $item->barang->Gambar) }}" alt="Product Image">
                                    </a>
                                 </td>
                                 <td class="product-name">
                                    <a href="shop-details.html">{{ $item->barang->Nama_Barang }}</a>
                                 </td>
                                 <td class="product-price">
                                    <span class="amount" data-price="{{ $item->barang->Harga }}">Rp.{{ $item->barang->Harga }}</span>
                                 </td>
                                 <td class="product-quantity">
                                    <span class="cart-minus">-</span>
                                    <input class="cart-input" type="text" name="jumlah[]" value="{{ $item->Jumlah }}" data-id="{{ $item->id }}">
                                    <span class="cart-plus">+</span>
                                 </td>
                                 <td class="product-subtotal">
                                    <span class="amount">Rp.{{ $item->barang->Harga * $item->Jumlah }}</span>
                                 </td>
                                 <td class="product-add-to-cart">
                                    <button type="submit" name="checkout_item[]" value="{{ $item->id }}" class="tp-btn tp-color-btn tp-wish-cart banner-animation">Checkout</button>
                                 </td>
                                 <td class="product-remove">
                                    <form action="{{ route('delete', ['id' => $item->id]) }}" method="post">
                                        @csrf
                                        <button type="submit" class="tp-btn tp-color-btn tp-wish-cart banner-animation">Hapus</button>
                                    </form>
                                </td>
                                
                              </tr>
                              @endif
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </form>
                  <br>
                  <div class="cart-page-total" style="max-width: 300px; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                     <h2 style="font-size: 1.2em;">Cart totals</h2>
                     <ul class="mb-20" style="list-style: none; padding: 0;">
                        <li style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                           <span>Subtotal</span>
                           <span id="cart-subtotal">Rp.{{ $subtotal }}</span>
                        </li>
                     </ul>
                     <a href="{{ route('checkout.show') }}" class="tp-btn tp-color-btn banner-animation" style="font-size: 0.9em; padding: 8px 16px;">Proceed to Checkout</a>
                  </div>
      
               </div>
            </div>
         </div>
      </div>
      
      <!-- cart area end-->

      </main>
      <!-- main-area-end -->

      <!-- footer-area-start -->
     @include('include.frontend.footer  ')
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

      <script>
        $(document).ready(function() {
            function updateSubtotal() {
                let subtotal = 0;
                $('.cart-input').each(function() {
                    const quantity = $(this).val();
                    const price = $(this).closest('tr').find('.product-price .amount').data('price');
                    const itemTotal = quantity * price;
                    $(this).closest('tr').find('.product-subtotal .amount').text('Rp.' + itemTotal);
                    subtotal += itemTotal;
                });
                $('#cart-subtotal').text('Rp.' + subtotal);
           
                $('.cart-input').on('input', function() {
            const itemId = $(this).data('id');
            const quantity = $(this).val();
            // Implement logic to update quantity in database via AJAX if needed
            updateSubtotal();
        });

        updateSubtotal();
    }});
   
  </script>
