<header>
    <div class="header-top tertiary-header-top space-bg">
        <div class="container">
            <div class="row">
                <div id="header-sticky" class="logo-area tp-sticky-one mainmenu-5">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-3">
                                <div class="logo">
                                    <a href="{{ route('welcome') }}">
                                        <img src="{{ asset('frontend/assets/img/logo/LOGO.png') }}" alt="logo" style="max-width: 120px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li>
                                                <a href="{{ route('welcome') }}">Home</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="#">Kategori</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('barangs') }}">Semua Produk</a></li>
                                                    <li><a href="{{ route('filter', ['Nama_Kategori' => 'tanaman']) }}">Tanaman</a></li>
                                                    <li><a href="{{ route('filter', ['Nama_Kategori' => 'bibit']) }}">Bibit</a></li>
                                                    <li><a href="{{ route('filter', ['Nama_Kategori' => 'pupuk']) }}">Pupuk</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-9">
                                <div class="header-meta-info d-flex align-items-center justify-content-end">
                                    <div class="header-meta__social d-flex align-items-center">
                                        <form action="{{ route('search') }}" method="GET" class="header-search-form">
                                            <input type="text" name="query" placeholder="Cari produk..." required>
                                            <button type="submit"></button>
                                        </form>
                                        <button class="header-cart p-relative tp-cart-toggle">
                                            <a href="{{ route('cart.index') }}"><i class="fal fa-shopping-cart"></i></a>
                                        </button>
                                        <a href="{{ route('profile') }}"><i class="fal fa-user"></i></a>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fal fa-sign-out"></i></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="header-mob-sticky" class="tp-md-lg-header d-md-none pt-20 pb-20">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-3 d-flex align-items-center">
                                <div class="header-canvas flex-auto">
                                    <button class="tp-menu-toggle"><i class="far fa-bars"></i></button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="logo text-center">
                                    <a href="{{ route('welcome') }}"><img src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="header-meta-info d-flex align-items-center justify-content-end ml-25">
                                    <div class="header-meta m-0 d-flex align-items-center">
                                        <div class="header-meta__social d-flex align-items-center">
                                            <button class="header-cart p-relative tp-cart-toggle">
                                                <span><i class="fal fa-shopping-cart"></i></span>
                                            </button>
                                            <a href="{{ route('cart.index') }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </header>
 