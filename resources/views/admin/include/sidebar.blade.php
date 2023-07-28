<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('/') }}public/logo/logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Nanna Briyani</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/') }}public/logo/logo.jpeg" class="img-circle elevation-2" alt="User Image">
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

          <li class="nav-header">MENU LIST</li>


          <li class="nav-item ">
            <a href="{{ route('category.index') }}" class="nav-link {{ Route::is('category.index')  ? 'active' : '' }}">
              <i class="nav-icon fas fa-tag"></i>
              <p>
               Category
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-pizza-slice"></i>
              <p>
                Food
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('food.create') }}" class="nav-link {{ Route::is('food.create')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Food</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('food.index') }}" class="nav-link {{ Route::is('food.index')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Food List</p>
                </a>
              </li>
            </ul>
          </li>


          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Menu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('menu.create') }}" class="nav-link {{ Route::is('menu.create')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('menu.index') }}" class="nav-link {{ Route::is('menu.index')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu List</p>
                </a>
              </li>
            </ul>
          </li> --}}


          <li class="nav-item ">
            <a href="{{ route('zipCode.index') }}" class="nav-link {{ Route::is('zipCode.index')  ? 'active' : '' }}">
              <i class="nav-icon fas fa-map-marker"></i>
              <p>
               Zip Code
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Order
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('order.index') }}" class="nav-link {{ Route::is('order.index')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('allOrder') }}" class="nav-link {{ Route::is('allOrder')  ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Old Order</p>
                </a>
              </li>
            </ul>
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
