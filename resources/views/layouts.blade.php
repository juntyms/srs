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
  <link href="{{asset('bootstrap-5.1.3-dist/css/dashboard.css')}}" rel="stylesheet">
</head>
    <body class="sb-nav-fixed">
    @include('sweetalert::alert')
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{route('dashboard')}}">Software Record System</a>
            @if (!empty(Auth::user()->privilege->privilege_id))
            @if(Auth::user()->privilege->privilege_id == 1)
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            @endif
            @endif
            <div class="navbar-nav">
            <a class="nav-link px-3" href="{{ route('logout')}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ ("Logout") }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
        </nav>
        @if (!empty(Auth::user()->privilege->privilege_id))
        @if(Auth::user()->privilege->privilege_id == 1)
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark shadow" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">SRS</div>
                            <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <!-- Academic Year -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#acMenu" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Academic Year 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="acMenu" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('ays.index')}}">View All</a>
                                    <a class="nav-link" href="{{route('ays.add')}}">Add New</a>
                                </nav>
                            </div>
                            <!-- End Academic Year --> 
                            <!-- Users -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#usMenu" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Users 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="usMenu" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('user.index')}}">View All</a>
                                    <a class="nav-link" href="{{route('user.add')}}">Add New</a>
                                </nav>
                            </div>
                            <!-- End Users --> 
                            <!-- Companies -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#compMenu" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Companies 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="compMenu" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('company.index')}}">View All</a>
                                    <a class="nav-link" href="{{route('company.add')}}">Add New</a>
                                </nav>
                            </div>
                            <!-- End Companies -->                            
                            <!-- Software -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#softMenu" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Software 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="softMenu" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('software.index')}}">View All</a>
                                    <a class="nav-link" href="{{route('software.add')}}">Add New</a>
                                </nav>
                            </div>
                            <!-- End Software -->
                            <!-- Software Types -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#typMenu" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Software Types
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="typMenu" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('SoftwareType.index')}}">View All</a>
                                    <a class="nav-link" href="{{route('SoftwareType.add')}}">Add New</a>
                                </nav>
                            </div>
                            <!-- End Software Types -->
                            <!-- Software Vendors -->
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#venMenu" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Software Vendors
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="venMenu" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('vendor.index')}}">View All</a>
                                    <a class="nav-link" href="{{ route('vendor.add')}}">Add New</a>
                                </nav>
                            </div>
                            <!-- End Software Vendors -->
                            <!-- Licenses -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#liMenu" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Licenses
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="liMenu" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('license.index')}}">View All</a>
                                    <a class="nav-link" href="{{route('license.add')}}">Add New</a>
                                </nav>
                            </div>
                            <!-- End Licenses -->
                            <!-- Privileges -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#privMenu" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Privileges
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="privMenu" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('privileges.index')}}">Assign Privilege</a>
                                </nav>
                            </div>
                            <!-- End Privileges -->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ Auth::user()->username }} 
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="card-body"><h4 class="h4">Software Record System</h4><hr></div>
                @endif
                @endif
                <div class="container-fluid px-4">
                        @yield('content')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted align-text-middle">Copyright &copy; UTAS 2022</div>
                            <div>
                                <a href="#"></a>
                                <a href="#"></a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('\bootstrap-5.1.3-dist\js\bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('\bootstrap-5.1.3-dist\js\scripts.js')}}" crossorigin="anonymous"></script>
    </body>
</html>