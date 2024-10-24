<!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>GreenShop</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{asset ('frontend/assets/img/logo/favicon.png')}}">

   <!-- CSS here -->
   <link rel="stylesheet" href="{{asset ('frontend/assets/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset ('frontend/assets/css/animate.css')}}">
   <link rel="stylesheet" href="{{asset ('frontend/assets/css/swiper-bundle.css')}}">
   <link rel="stylesheet" href="{{asset ('frontend/assets/css/slick.css')}}">
   <link rel="stylesheet" href="{{asset ('frontend/assets/css/nice-select.css')}}">
   <link rel="stylesheet" href="{{asset ('frontend/assets/css/fontawesome.min.css')}}">
   <link rel="stylesheet" href="{{asset ('frontend/assets/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{asset ('frontend/assets/css/spacing.css')}}">
   <link rel="stylesheet" href="{{asset ('frontend/assets/css/meanmenu.css')}}">
   <link rel="stylesheet" href="{{asset ('frontend/assets/css/main.css')}}">

   @yield ('css')

   <style>
       .tpproduct__thumb img {
            width: 100%;
            height: 300px; /* Atur tinggi sesuai kebutuhan */
            object-fit: cover;
       }
       .green-btn {
    background-color: #28a745; /* Warna hijau */
    color: white; /* Warna teks */
    padding: 10px 20px; /* Padding tombol */
    border-radius: 5px; /* Sudut melengkung */
    text-decoration: none; /* Hilangkan garis bawah */
    transition: background-color 0.3s; /* Transisi halus */
}

.green-btn:hover {
    background-color: #218838; /* Warna hijau yang lebih gelap saat di-hover */
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

   <!-- header-area-start -->
  @include('include.frontend.header')
   <!-- header-area-end -->


   <!-- header-cart-start -->

   <!-- header-cart-end -->

   <!-- main-area-start -->
   <main>

      <!-- slider-area-start -->
      <section class="slider-area">
         <div class="secondary-slider p-relative">
            <div class="swiper-container greenslider-active">
               <div class="swiper-wrapper">
                  <div class="swiper-slide slider-bg-2 slider-3">
                     <div class="container">
                        <div class="row p-relative justify-content-xl-end align-items-center">
                           <div class="col-xl-5 col-lg-6 col-md-6">
                              <div class="tpslidertwo__content slider-content-3">
                                 <h3 class="tpslidertwo__title mb-10">Pupuk</h3>
                                 <p>Kebun saya adalah guru favorit saya.</p>
                                 <div class="tpslidertwo__slide-btn d-flex align-items-center ">
                                    <a class="tp-btn banner-animation mr-25 green-btn green-btn:hover" href="{{ route('barangs') }}">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                                    <span>Start From <br> <b>Rp.25.000</b></span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-5 col-lg-6 col-md-6 d-none d-md-block">
                              <div class="tpsliderthree__img p-relative text-end pt-55">
                                 <img src="{{asset ('frontend/assets/img/slider/pupuk.jpg')}}" alt="">
                              
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide slider-bg-2 slider-3">
                     <div class="container">
                        <div class="row p-relative justify-content-xl-end align-items-center">
                           <div class="col-xl-5 col-lg-6 col-md-6">
                              <div class="tpslidertwo__content slider-content-3">
                                 <h3 class="tpslidertwo__title mb-10">Tanaman</h3>
                                 <p>"Yang paling dekat menjadi orang tua adalah dengan merawat semua tanaman."</p>
                                 <div class="tpslidertwo__slide-btn d-flex align-items-center ">
                                    <a class="tp-btn banner-animation mr-25 green-btn green-btn:hover" href="{{ route('barangs') }}">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                                    <span>Start From <br> <b>Rp.25.000</b></span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-5 col-lg-6 col-md-6 d-none d-md-block">
                              <div class="tpsliderthree__img p-relative text-end pt-55">
                                 <img src="{{asset ('frontend/assets/img/slider/tanaman.jpg')}}" alt="">
                              
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide slider-bg-2 slider-3">
                     <div class="container">
                        <div class="row p-relative justify-content-xl-end align-items-center">
                           <div class="col-xl-5 col-lg-6 col-md-6">
                              <div class="tpslidertwo__content slider-content-3">
                                 <h3 class="tpslidertwo__title mb-10">Bibit</h3>
                                 <p>Cinta berkebun adalah benih yang pernah ditaburkan, yang tidak akan pernah mati.</p>
                                 <div class="tpslidertwo__slide-btn d-flex align-items-center ">
                                    <a class="tp-btn banner-animation mr-25 green-btn green-btn:hover" href="{{ route('barangs') }}">Shop Now <i class="fal fa-long-arrow-right"></i></a>
                                    <span>Start From <br> <b>Rp.25.000</b></span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-5 col-lg-6 col-md-6 d-none d-md-block">
                              <div class="tpsliderthree__img p-relative text-end pt-55">
                                 <img src="{{asset ('frontend/assets/img/slider/bibit.jpg')}}" alt="">
                              
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="greenslider-pagination"></div>
         </div>
      </section>
      <!-- slider-area-end -->

      <!-- services-area-start -->
      <section class="services-area pt-70">
         <div class="container">
            <div class="row services-gx-item">
               <div class="col-lg-3 col-sm-6">
                  <div class="tpservicesitem d-flex align-items-center mb-30">
                     <div class="tpservicesitem__icon mr-20">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" height="36" viewBox="0 0 34 36">
                           <image id="services-icon-01.svg" width="34" height="36" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAkCAYAAADsHujfAAADCklEQVRYhcWYXYiMURjHf2bFcqEpqV0udsaN3RuLUoR2lZDsbiS0tt0ttLlxw14gX+GCC3spF9gbQpI2bKJ8la+yvrM+2pFIbbTLBYqsDv9Tx9v7vvPOzjvjX2/TzDznnN85z3Oe85yXPNUA3ACeAM35dparEkAL8BjoAVYCrUBGT0uhAcYAmzWYWYV6HxsD9MgBGhEnQBJoBwacJ9us6wVrgNYD4/MF2KXBrwI1+r0ReB7RDabNZdluBcqHCzAEPABSPnbLHTcYl4wM6XMacBp4C+wDKsIAyoC9AjgFTBfAUeAHcCwAaBFwTUAbgFEhY6TUzzfgiBdoInAA+AJ0AumADvYDHwU5xcdmKnDWccOkCEBDmuifCfboh7UhDd0OtgNvgEvAXB+bSuA40K8J+q2iVavGfmm+9ykmzEzuAqsjAE0A2tTGBPISH5u0Zv0ZOOwBWqx2/Rq7z4KktedtYnodMTGVOG0eAk0+NtYNP/V5D+gF1mnMtBfEu2S9OWZKC9TnaVOiIM4IptFn5QJBrFbw1112i46OANTi5Bmz7J/kBpPYvvvYRwKxWuBkyo3AuBDbpD6bFIg2EabiALGaCXQBm/Q94QGwidCcymMFYhUriKtK5Z4OB+A8MEc2OYGEpeVsMsFcDZxQQM4Dng63s3xAUMzcAQYjQFSH/ZkI+zMmmWC9ouNjy/8EOQfcVCx0BBnl65owfdXuua40Hyp3RWbrDIhTXVEg8MkDh1TsLCvgSmUF6Xb8eFA7wu8QKziIKeGe6WAyQLuBVUBpMUDcYN0GvAL2CKBOW64o8u6aTj05VdtxKCFX7PBUUB+KNH65xh40IAuBXzr8gir1uFWlovmF6pW6hAphUzhPFtB9AVUVAGAWcBK4pTtOha6x791dY4FmAO+Ai8AZNc5Xtbrxdat6SzulQ1aV6X6SUSc1AQ1M3tkZ8F+tysQB2SQD7CKpVPVmRneghgggLkC7iqRY5b4HafYBWSr/Z3TvKfjp7gLdBi5oB5iXN+bFTTHKi3+0RoekccP8YfcC/AZJgs7K1UbdbAAAAABJRU5ErkJggg=="/>
                         </svg>                         
                     </div>
                     <div class="tpservicesitem__content">
                        <h4 class="tpservicesitem__title">Free shipping</h4>
                        <p>Free shipping on orders over.</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="tpservicesitem d-flex align-items-center mb-30">
                     <div class="tpservicesitem__icon mr-20">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36" height="27" viewBox="0 0 36 27">
                           <image id="services-icon-02.svg" width="36" height="27" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAbCAYAAAAULC3gAAACyUlEQVRIic3XX8iecxgH8M+7XvmzMMIawxzYTpSVImp70aRETSJENrYDbQcjmqTt3YHRIssWO/InHCAkITmgsMbKWi29Q2wl2QEbxdQwXfV96u3Z+zzP/c692bfunrvffV3X/X1+13V9r989hKl4ENdgivbwJ7ZjPXY1jTqMJzAXj2Nfi4SOx234AtdiW1PH3zCrRSLduBk/Y1pTh4NHkEwHG/FsE8OhEHohv/djES5umdAMLMB8bO5nOJzfMRzAr/gm+W8TYymNR3FVP8PODg39xxfOwa0DbDZhC5bj3V5Gw70eTBJF5iZ82sOt0vU3lqY8ZuOPXq9oo6hX46k+zy/FXpyBj6J7E6JNIeyH0qJXsAoP4OFeMnC0CBUewR3JyGtY+38T2pcx8mTIlYpf0W3UVlGLfi1sYDcrXbk+aRzFi52HbbX9OZjZ0La67Uv8gzuxDNPxXCeNR2N0DMLl2JpdOyYIiST8ogGhk3FiCy+sc9dJA2wO9iN0D37A79ifeXTXYRCpbtqROKXO3+LuyRJalyE7kkFb3Xg9vo+4NcVofEayO9U8V2dttB+h7qsczo2q1gngR6xJy9YIuLIBodnZ4fJZEb+9OaGenXo55N2dth9fI69m3pSQ1Yy6Li36HlbiEpyA+wYQ2hDh/Tx/ZmFS/3rm3mmZcYvH+ewfSl73jFusGXMLbs85+Omsr85Ba0tOfz8NIDQtO3NZ4q/J+r0h8gbe6foAOL9q48J0UgfPROR2x1FqaB5exqn4AA8NIPRYSH2NG8atz09JnIWPQ7CDvyYKtCQpOxM7c+2K83EJduMAMlJnX4XU1viN5X56iDbq2tKLz/BSgo2kbur+TbzfJEjwId7CeV1xNqaLG+N0PJ+ueDtX3VfKTplEnCqFilMaVPVSx46KUw1SnXYIBg3VmsoXRUMqjdXGh4ML8jFaf+YTfDdhEPwLg8uoL4tFMQIAAAAASUVORK5CYII="/>
                         </svg>                         
                     </div>
                     <div class="tpservicesitem__content">
                        <h4 class="tpservicesitem__title">Free Returns</h4>
                        <p>30-days free return policy</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="tpservicesitem d-flex align-items-center mb-30">
                     <div class="tpservicesitem__icon mr-20">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36" height="36" viewBox="0 0 36 36">
                           <image id="services-icon-03.svg" width="36" height="36" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAACnklEQVRYhcWYTYhOYRTHf02KrDTEAtOgfJQwFjK+S7FSIjaGmWGaSamZiAXiXbHwbWNB2IiShSxYYAwhSiSRSb1D2dGrLBSa0dG5ddyee+97733u9a/prfOce57fPfecc587FKiNwGvgJ/AMmFfkZknqBEaA28BO4B1QA1r+B8xWhTlpbKOBJ8C3sqECmHOOtXEK9aWsxycwv4BLMT4C9bIMqPWaGQszEbgFfNXf5hBUoTXVBxwO2a4DH4EKUAX6zdoY4GkRNbXE3HlYn4CDauvQDDYaH8nUfYXy9vieA3sj1vo1M23AK+C9w8dbTTXpb0OMj2RuUDMzBMyJ8LNQ87PAbNdNWuv0HxVh3xIqdIG+kRYmmDMn0l4YUkXjbDbma8DjNEG2xQy9LDC2K5s1QxfrDeIaepO0S9o8wFT1L6pj/1GnY+gJzFstxBllwojTD+CMI4ikeFqZMKINGmiWsc0FBjzCTK4XRrRGg61M8JO2XQVMSQlTd2asXujFsyPWd+iLUjb+DexR+4IiYERTgQ8RQXbrpqeARcAxYBgYb6C8wsRBHVKYIyE/sa0OXR/ADPqACSSF/V0DX3HAYGrGbuo1M4FWaJsHL8o3wP4IGFfNiL3XF8xarYtHwNIInySYcNYyq9Gc9qLe2kmt/Rm46wNG1JFwdxXTZS6YZbre7gvoTugsbNWim9V083V62B8yBXxAv1zH+gISmKsx6wt14wFTKw9MRqsJn0WpJBN4RIdfPZoJTDd+yyNmUib1aLDzOWJc1gx5gRlOc3pzqE9vqDsvTJfCZH3uE3R6C8zZvDDtGR5Tg34sHgcemq7blxemxzFP4rQJuGmOHTX9aujWs1EudaWsmV2mvY8Ci/MChCX/FLiQwv8ecNo3xF8BfwD4tdQxtW0vigAAAABJRU5ErkJggg=="/>
                         </svg>                         
                     </div>
                     <div class="tpservicesitem__content">
                        <h4 class="tpservicesitem__title">Secured Payments</h4>
                        <p>We accept all major credit cards</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <div class="tpservicesitem d-flex align-items-center mb-30">
                     <div class="tpservicesitem__icon mr-20">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="36" height="36" viewBox="0 0 36 36">
                           <image id="services-icon-04.svg" width="36" height="36" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAADW0lEQVRYhc2YaYhNYRjHfyZLJkWMCVmubYoppSHLWIYIY42GTGQwKREfqLEPTVK+SLKlGEzKB5n5wAfRUGQpy5SyjRl7sitLiRk94390Ou4999w7d67519u957zv87z/53m3/3lbEDs6ANOB4cAgoDeQBrQE3gEPgNfAOeA88DRMDyGgANjqrYiF0ASgCBgJpAK3gCqgVgTqgM7qbCAwWnbXgX3AMZcvI3Mkxv7/YihQCdTrd7WyFA0dgXygXLZGPM9FqD5WIsa+GPgBXAbGxRONYBk7KRKHgHWxEmoDnJbRRs2PRGAp8F5+AxOy4bgEfATGJ4CE+XuoCW/lqx+hcJHvBbKAUcCdBBD6xJ+h7+p5/yqI8VYxzwvQtslhy/WnomkWKNfSTNQEbhQGa6jmN5fs2K5Z3Qx4NKAd8E17RCIxJd7hn6zh6pdAMtnyOSZWQ4tgGPDSZ8jW6WC1A3QT8MRVNwvIBZZ5bAqB+0BbnX9ufAfm6PcfpACZwKMIZGwL2C4y2XLeSnW2TexShr1BTgKOAzVauU4QOcDnSGQcXNGBFw7XgDK9z/IMQ5men3ns5ul9X8/7IyKX5kcGCaptEerGKhOGzeqoDzBX/6vDEDoD3PC8a6/2S3x4hJzEPAZKopBeJYc7gR6K9CywR4TS1a6LhNoij32O7DN9+virka4CBwOQceTmWtdp7ZR7qivUc7rHR77ep/j0Y9mrT9GQ9YzQaAOwWyvmA7BSc2GIyn5JiolqvwKoAN54/LRR5up8CPV3AtsCvI3QqEzywSm22ga46hdq6NDcsizMDOMnJ4CUqdBHQUN05qh7FINoKNF+Fu/hbIJwPVJ09rCmkYRyNd/iwVglZZhje9hnc0wGSoG77n5Gi+G0/0AmpL4LvBWVWk2pSSZUGkkYGtMvwI4kklmu7CyI1KBIDaYmgUxI283RaA1PadVlNDGZWpWoU6Q1cFEyIacJyGS4yIQCtG9AB32L1wU4eGPBYmXfyPSKx0Gx5lSN7oTixQjXDYp9GXdqTFR2c3FBzqokLYKk2jTQbJ1PZntbu7kvYrkwMqlq8mKGZKztrHZpZSLNDt1fitzmiBXnwsqucg4AJ4J0Es8NlklQ2xZMY5tksCu9bvJlVy3PJSNuasW+COwZ+A1hwdFJsNdDBgAAAABJRU5ErkJggg=="/>
                         </svg>                         
                     </div>
                     <div class="tpservicesitem__content">
                        <h4 class="tpservicesitem__title">Customer Service</h4>
                        <p>Top notch customer setvice</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- services-area-end -->

      <!-- product-area-start -->
      <section class="product-area pt-65 pb-40">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6 col-12">
                 
               </div>
               
          
              
              
              
            
         </div>
      </section>
      <!-- product-area-end -->

     
   </main>
   <!-- main-area-end -->

   <!-- footer-area-start -->
   @include('include.frontend.footer')
   <!-- footer-area-end -->



   <!-- JS here -->
   <script src="{{asset ('frontend/assets/js/jquery.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/waypoints.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/swiper-bundle.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/slick.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/magnific-popup.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/nice-select.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/counterup.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/wow.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/isotope-pkgd.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/imagesloaded-pkgd.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/countdown.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/ajax-form.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/meanmenu.js')}}"></script>
   <script src="{{asset ('frontend/assets/js/main.js')}}"></script>
</body>

</html>


 