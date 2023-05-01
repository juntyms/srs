<!DOCTYPE html>
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
  <link href="{{asset('\bootstrap-5.1.3-dist\css\bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

</head>
    <body class="sb-nav-fixed">
    @include('sweetalert::alert')
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-light shadow">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{route('dashboard')}}">Software Record System</a>
            @if (!empty(Auth::user()->privilege->privilege_id))
            @if(Auth::user()->privilege->privilege_id == 1)
            @endif
            @endif
            <div class="navbar-nav">
                <a class="nav-link px-3" href="{{ route('dashboard')}}">Dashboard</a>
                @if (!empty(Auth::user()->privilege->privilege_id))
                @if(Auth::user()->privilege->privilege_id != 3)
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Licenses</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @if(Auth::user()->privilege->privilege_id == 1)
                            <li><a class="dropdown-item" href="{{ route('software.index')}}">All License</a></li>
                            @endif 
                            @if(Auth::user()->privilege->privilege_id != 1)
                            <li><a class="dropdown-item" href="{{ route('dashboard')}}">All License</a></li>
                            @endif
                            <li><a class="dropdown-item" href="{{ route('company.index')}}">Suppliers</a></li>
                            @if(Auth::user()->privilege->privilege_id == 1)
                            <li><a class="dropdown-item" href="{{ route('subscription.index')}}">Subscription</a></li>
                            <li><a class="dropdown-item" href="{{ route('LicenseType.index')}}">License Types</a></li>
                            <li><a class="dropdown-item" href="{{ route('SoftwareVendor.index')}}">Vendors</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
                @endif
                @endif
                
                @if (!empty(Auth::user()->privilege->privilege_id))
                @if(Auth::user()->privilege->privilege_id == 1)
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin Tools</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('ays.index')}}">Academic Years</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.index')}}">Users</a></li>
                            <li><a class="dropdown-item" href="{{ route('privileges.index')}}">Assign Privilege</a></li>
                        </ul>
                    </li>
                </ul>
                @endif
                @endif
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">{{ Auth::user()->fullname }}</a></li>                        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                            <li><a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--
            <div style=" margin-left: auto; float: right;">
            <img src="{{asset('\bootstrap-5.1.3-dist\css\logo2.png')}}" alt="SRS" width="225" height="65">
            </div> -->
        </nav>
        <div class="container-fluid px-2 mt-5 ms-auto">
            <div class="card-body">
                <h4 class="h4"></h4>
            </div>
            <div class="card-body">
                @yield('content')
            </div>
                    
        </div>
        <footer class="py-0 fixed-bottom my-8 bg-light small">
            <p class="text-center text-muted align-text-middle medium">&copy; Copyright  Copyright UTAS - Salalah. All Rights Reserved - Developed By: ETC Software Development Team</p>                        
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('\bootstrap-5.1.3-dist\js\bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('\bootstrap-5.1.3-dist\js\simple-datatables@latest.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('\bootstrap-5.1.3-dist\js\datatables-simple-demo.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('\bootstrap-5.1.3-dist\js\scripts.js')}}" crossorigin="anonymous"></script>

    </body>
</html>