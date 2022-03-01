@extends('layouts.n')
@section('title','Users - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Users
        <a href="{{ route('user.add')}}" class="float-end btn btn-sm btn-success">Create New User</a>
    </div>
    <div class="card-body">
    @if(Session::has('msg'))
        <p class="text-danger">{{session('msg')}}</p>
        @endif
            @csrf
            <table id="datatablesSimple" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Department</th>
                    <th>Full Name</th>
                    <th>Email </th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ( $user as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->department->name}}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ route('user.edit',$user->id)}}" class="btn btn-info btn-sm">Edit</a>
                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('user.delete',$user->id) }}" class="btn btn-danger btn-sm">delete</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div> 
</body>
</html>
<script src="{{asset('\bootstrap-5.1.3-dist\js\simple-datatables@latest.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('\bootstrap-5.1.3-dist\js\datatables-simple-demo.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('\bootstrap-5.1.3-dist\js\scripts.js')}}" crossorigin="anonymous"></script>

@endsection