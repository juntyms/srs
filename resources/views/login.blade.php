<link href="{{asset('\bootstrap-5.1.3-dist\css\styles.css')}}" rel="stylesheet" />
<script src="{{asset('\bootstrap-5.1.3-dist\js\all.min.js')}}" crossorigin="anonymous"></script>

<body class="bg-dark">
    @include('sweetalert::alert')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="my-3 mt-5"></div>
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <center><img src="{{asset('\bootstrap-5.1.3-dist\css\soft.png')}}" alt="SRS" width="65" height="70"></center>
                                    <h4 class="text-center font-weight-light my-4">Software Record System - Login</h4>
                                    <div class="card-body">
                                        @if(Session::has('msg'))
                                        <p class="text-danger">{{session('msg')}}</p>
                                        @endif

                                        @if($errors->any())
                                        @foreach($errors->all() as $error)
                                        <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                        @endif
                                        {{ Form::open(['route'=>'postlogin']) }}
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input name="username" class="form-control" id="inputEmail" type="text" placeholder="username" />
                                            <label for="inputEmail">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <input type="submit" class="btn btn-primary" value="Login" />
                                        </div>
                                        {{ Form::close() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
</body>
<script src="{{asset('\bootstrap-5.1.3-dist\js\scripts.js')}}" crossorigin="anonymous"></script>
<footer class="py-0 fixed-bottom my-8 bg-light">
    <p class="text-center text-muted">© 2022 UTAS-Salalah </p>
</footer>