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
<main class="col-md-9 ms-sm-auto col-lg-12 px-md-5">
      <div class="card mb-2 mt-2">
      <h4 class="h4">Software Record System</h4>
        <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Software
        </div>
        <div class="card-body">
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>Academic Year</th>    
                    <th>Software Name</th>
                    <th>Department </th>
                    <th>Software Vendor</th>
                    <th>Software Type</th>
                    <th>Company </th>
                    <th>Purchase Date</th>
                    <th>Price</th>
                    <th>Expiry Date</th>
                    <th>Warranty End Date</th>
                    <th>License </th>
                    <th>Available</th>
                    <th>Custodian Name</th>
                </tr>
                @foreach ( $software as $software )
                <tr>
                    <td>{{ $software->ay->name }}</td>
                    <td>{{ $software->name }}</td>  
                    <td>{{ $software->dept->name}}</td> 
                    <td>{{ $software->vendor->name }}</td>
                    <td>{{ $software->type->name }}</td>
                    <td>{{ $software->comp->name }}</td>
                    <td>{{ \carbon\carbon::parse($software->purchase_date)->format('d-M-Y') }}</td>
                    <td>{{ $software->price }} .OMR</td>
                    <td>{{ \carbon\carbon::parse($software->expiry_date)->format('d-M-Y') }}</td>
                    <td>{{ \carbon\carbon::parse($software->warranty_end_date)->format('d-M-Y') }}</td>
                    <td>{{ $software->li->name }}</td>
                    <td>{{ ($software->installer_is_available)? 'Yes':'No' }}</td>
                    <td>{{ $software->custodian_name }}</td>    
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</main>
                <footer class="py-2 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex justify-content-between small">
                            <div class="text-muted align-text-middle">Copyright &copy; UTAS 2022</div>
                        </div>
                    </div>
                </footer>
</body>

</html>