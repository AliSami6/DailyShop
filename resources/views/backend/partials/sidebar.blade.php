<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link" target="_blank">

    <img src="{{asset('frontend/img/logo.jpg')}}" alt=" daily Shop " class="brand-image" style="border-radius:2px; width:80px;height:60px;">

    <span class="brand-text font-weight-light"> Visit Website</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- SidebarSearch Form -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{url('/admin/home')}}" class="nav-link" title="Dashboard ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p> Dashboard </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="" class="nav-link " title="products">
            <i class="nav-icon fas fa-shopping-cart"></i>
            <p>
                Products
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="" class="nav-link" title=" Contact Us List">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Contact Us List
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('admin/category')}}" class="nav-link " title=" Category List">
            <i class="nav-icon fas fa-user"></i>
            <p>
                Category
            </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{url('admin/subcategory')}}" class="nav-link " title=" Subcategory List">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Sub Category
              </p>
            </a>
          </li>

        <li class="nav-item">
          <a href="{{url('admin/colors')}}" class="nav-link" title="All Colors List">
            <i class="nav-icon fa fa-users"></i>
            <p>
             Colors
            </p>
          </a>
        </li>

        <hr class="mt-1">
        <span class="p-2">Pages Management</span>
        <hr class="mb-1">

        <li class="nav-item">
          <a href="#" class="nav-link" title="Menu List">
            <i class="nav-icon fas fa-angle-double-right"></i>
            <p> Menu List </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('admin/slider')}}" class="nav-link" title="home page Slider section">
            <i class="nav-icon fas fa-angle-double-right"></i>
            <p> Sliders </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('admin/offer')}}" class="nav-link " title="Our Client  section">
            <i class="nav-icon fas fa-angle-double-right"></i>
            <p> Offer items </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('admin/offer')}}" class="nav-link " title=" Working Experience  section">
            <i class="nav-icon fas fa-angle-double-right"></i>
            <p>Settings </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('admin/testimonial')}}" class="nav-link " title="Team Member section">
            <i class="nav-icon fas fa-angle-double-right"></i>
            <p> Testimonal </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="" class="nav-link " title="Gallery Section">
            <i class="nav-icon fas fa-angle-double-right"></i>
            <p> Gallery </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" "class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Products List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/add_product') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Products</p>
                </a>
              </li>
            </ul>
          </li>
        <li class="nav-item">
          <a href="" class="nav-link" title="Work Progress section">
            <i class="nav-icon fas fa-angle-double-right"></i>
            <p>  </p>
          </a>
        </li>


        <hr class="mt-1">
        <span class="p-2">Extras</span>
        <hr class="mb-1">




        <!-- <hr class="mt-1">
        <span class="p-2">Others</span>
        <hr>







      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
