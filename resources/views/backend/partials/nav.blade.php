<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
<nav class="main-header navbar navbar-expand navbar-white navbar-light align-item-center" style=" background: linear-gradient(355deg, #2a3f54 -4%, #162031, #162031, #162031 66%) !important;">

  <!-- Left navbar links -->
  <ul class="navbar-nav mx-3">
    <li class="nav-item">
      <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

  </ul>
  <ul class="navbar-nav ml-auto px-3" style="height: 40px; ">

    <li class="nav-item d-none d-sm-inline-block">
      <a class="dropdown-item nav-link bg-transparent text-light px-3" id="logout" href="" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
        {{ __('Logout') }}
      </a>

      <form id="logout-form" action="" method="POST" class="d-none">
        @csrf
      </form>
    </li>


    <li class="nav-item d-sm-inline-block">
      <a class="dropdown-item nav-link bg-transparent text-light" id="logout" href="">
        <i class="fa-solid fa-user-tie"></i>

      </a>

    </li>


  </ul>
</nav>
