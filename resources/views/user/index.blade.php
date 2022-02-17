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
            <table class="table table-bordered">
                <tr>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Email </th>
                    <th>Action</th>
                    
                </tr>
                @foreach ( $user as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ route('user.edit',$user->id)}}" class="btn btn-info btn-sm">Edit</a>
                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('user.delete',$user->id) }}" class="btn btn-danger btn-sm">delete</a></td>
                </tr>
                @endforeach
            </table>
    </div>
</div> 
</body>
</html>
@endsection