<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>@yield('title')</title>

  <!-- Favicons -->
  <link rel="icon" href="{{asset('\bootstrap-5.1.3-dist\css\soft.png')}}" type="image/x-icon" />

  <!-- Bootstrap core CSS -->
  <link href="{{asset('\bootstrap-5.1.3-dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="{{asset('\bootstrap-5.1.3-dist\js\all.min.js')}}" crossorigin="anonymous"></script>
  <meta name="theme-color" content="#7952b3">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="{{asset('bootstrap-5.1.3-dist/css/styles.css')}}" rel="stylesheet">
  <link href="{{asset('bootstrap-5.1.3-dist/css/dashboard.css')}}" rel="stylesheet">
</head>

<body>
  @include('sweetalert::alert')
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{ route('dashboard')}}">Software Record System</a>
    <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="{{ route('logout')}}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">{{ ("Logout") }}</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      </div>
    </div>
  </nav>

  </nav>
  @if (!empty(Auth::user()->privilege->privilege_id))
  @if(Auth::user()->privilege->privilege_id == 1)
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <nav class="sb-sidenav accordion sb-sidenav-light shadow" id="sidenavAccordion">
          <div class="position-sticky pt-3">
            <center><img src="{{asset('\bootstrap-5.1.3-dist\css\soft.png')}}" align-items-center alt="SRS" width="45" height="50"></center>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('dashboard')}}">
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('ays.index')}}">
                  Academic Year
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('user.index')}}">
                  Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('company.index')}}">
                  Companies
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('software.index')}}">
                  Softwares
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('SoftwareType.index')}}">
                  Software Types
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('vendor.index')}}">
                  Software Vendors
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('license.index')}}">
                  Licenses
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('privileges.index')}}">
                  Privileges

                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link">
                </a>
              </li>
              <li class="sb-sidenav-footer">
                <div class="medium">Logged in as:</div>
                {{ Auth::user()->username }} 
              </li>
            </ul>
          </div>
          @endif
          @endif
        </nav>
  </div>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-2">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-4 mb-2 border-bottom">
        <h4 class="h4">Software Record System</h4>
      </div>
      @yield('content')
  </main>

</body>
<footer class="py-0 my-7 bg-light">
  <p class="text-center text-muted">© 2022 UTAS-Salalah </p>
</footer>

</html>