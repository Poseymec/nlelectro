<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="{{asset('backend/dist/img/logo6.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">NL Electro</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview  {{request()->is('admin')? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('admin')? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de Bord
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin')}}"class="nav-link {{request()->is('admin')? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tableau de Bord v1</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview {{request()->is('admin/addcategory' )||request()->is('admin/category' )? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('admin/addcategory' )||request()->is('admin/category' )? 'active' : ''}} ">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/addcategory')}}" class="nav-link {{request()->is('admin/addcategory')? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter une Categorie</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/category')}}" class="nav-link {{request()->is('admin/category')? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview  {{request()->is('admin/addslider' )||request()->is('admin/slider' )? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('admin/addslider' )||request()->is('admin/slider' )? 'active' : ''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Sliders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/addslider')}}" class="nav-link {{request()->is('admin/addslider')? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter un slider</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/slider')}}" class="nav-link {{request()->is('admin/slider')? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview   {{request()->is('admin/addproduct' )||request()->is( 'admin/product')? 'menu-open' : ''}}">
            <a href="#" class="nav-link  {{request()->is('admin/addproduct' )||request()->is( 'admin/product')? 'active' : ''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Produits
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/addproduct')}}" class="nav-link {{request()->is('admin/addproduct')? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter un produit</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/product')}}"class="nav-link {{request()->is('admin/product')? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Produits</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview   {{request()->is('admin/addpromo' )||request()->is( 'admin/promo')? 'menu-open' : ''}}">
            <a href="#" class="nav-link  {{request()->is('admin/addpromo' )||request()->is( 'admin/promo')? 'active' : ''}}">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Promotion
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/addpromo')}}" class="nav-link {{request()->is('admin/addpromo')? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Ajouter une Promotion</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/promo')}}" class="nav-link {{request()->is('admin/promo')? 'active' : ''}}">
                  <i class="far fa-file nav-icon"></i>
                  <p>Promotions</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">DIVERS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>