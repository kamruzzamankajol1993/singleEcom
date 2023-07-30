<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('/') }}{{ $seoInfoIcon }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ $seoInfoTitle }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/') }}{{ $seoInfoIcon }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item ">
            <a href="{{ route('home') }}" class="nav-link {{ Route::is('home')  ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header">NAV BAR</li>


          <li class="nav-item ">
            <a href="{{ route('mainTitle.index') }}" class="nav-link {{ Route::is('mainTitle.index')  ? 'active' : '' }}">

              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
               Main Title
              </p>
            </a>
          </li>


          <li class="nav-item ">
            <a href="{{ route('slider.index') }}" class="nav-link {{ Route::is('slider.index')  ? 'active' : '' }}">
                <i class="nav-icon fas fa-images"></i>
              <p>
               Slider
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('service.index') }}" class="nav-link {{ Route::is('service.index')  ? 'active' : '' }}">
                <i class="nav-icon far fa-file-alt"></i>
              <p>
               Service
              </p>
            </a>
          </li>


          <li class="nav-item ">
            <a href="{{ route('aboutUs.index') }}" class="nav-link {{ Route::is('aboutUs.index')  ? 'active' : '' }}">
                <i class="nav-icon far fa-copy"></i>
              <p>
               About Us
              </p>
            </a>
          </li>


          <li class="nav-item ">
            <a href="{{ route('choose.index') }}" class="nav-link {{ Route::is('choose.index')  ? 'active' : '' }}">
              <i class="nav-icon fas fa-tag"></i>
              <p>
               Why Choose Us
              </p>
            </a>
          </li>


          <li class="nav-item ">
            <a href="{{ route('testimonial.index') }}" class="nav-link {{ Route::is('testimonial.index')  ? 'active' : '' }}">
                <i class="nav-icon far fa-id-card"></i>
              <p>
                Testimonial
              </p>
            </a>
          </li>


          <li class="nav-item ">
            <a href="{{ route('product.index') }}" class="nav-link {{ Route::is('product.index')  ? 'active' : '' }}">
                <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Product
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('billing.index') }}" class="nav-link {{ Route::is('billing.index')  ? 'active' : '' }}">
                <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Order
              </p>
            </a>
          </li>


          <li class="nav-item ">
            <a href="{{ route('contactUs.index') }}" class="nav-link {{ Route::is('contactUs.index')  ? 'active' : '' }}">
                <i class="nav-icon fas fa-address-card"></i>
              <p>
                Contact Information
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('social.index') }}" class="nav-link {{ Route::is('social.index')  ? 'active' : '' }}">
                <i class="nav-icon fas fa-link"></i>
              <p>
                Social Link
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('policy.index') }}" class="nav-link {{ Route::is('policy.index')  ? 'active' : '' }}">
                <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Policy Pages
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('shipping.index') }}" class="nav-link {{ Route::is('shipping.index')  ? 'active' : '' }}">
                <i class="nav-icon fas fa-shipping-fast"></i>
              <p>
                Shipping Price
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ route('seo.index') }}" class="nav-link {{ Route::is('seo.index')  ? 'active' : '' }}">
                <i class="nav-icon fas fa-info-circle"></i>
              <p>
               Seo Information
              </p>
            </a>
          </li>





          <li class="nav-item ">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="nav-link {{ Route::is('logout')  ? 'active' : '' }}">
                <i class="nav-icon fas fa-cogs"></i>
              <p>
               Log out
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
