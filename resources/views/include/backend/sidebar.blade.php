<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div class="logo-icon">
        <img src="{{ asset('frontend/assets/img/logo/LOGO.png') }}" alt="logo" style="max-width: 200px;">
      </div>
      <div class="logo-name flex-grow-1">
        <h5 class="mb-0"></h5>
      </div>
      <div class="sidebar-close">
        <span class="material-icons-outlined">close</span>
      </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
          <li>
            <a href="{{ route('user.index') }}">
              <div class="parent-icon"><i class="material-icons-outlined">support</i>
              </div>
              <div class="menu-title">ACL</div>
            </a>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">home</i>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
            <ul>
              <li><a href="{{ route('barang.index') }}"><i class="material-icons-outlined">arrow_right</i>Barang</a>
              </li>
              <li><a href="{{ route('kategori.index') }}"><i class="material-icons-outlined">arrow_right</i>Kategori</a>
              </li>
            </ul>
          </li>
          <li>
            
        <!--end navigation-->
    </div>
  </aside>