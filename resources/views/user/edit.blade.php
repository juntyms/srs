@extends('layouts')
@section('title','Update User - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Update User
        <a href="{{ route('user.index')}}" class="float-end btn btn-sm btn-success">View All Users</a>
    </div>
    <div class="card-body">
    @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif
        
    @if(Session::has('msg'))
        <p class="text-success">{{session('msg')}}</p>
        @endif
            @csrf
            <table class="table table-bordered">
                <tr>
                {{ Form::model($user,['route'=>['user.update',$user->id]]) }}
                    <th>Username</th>
                    <td>{{ Form::text('username',null) }}</td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>{{ Form::text('password',null) }}</td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td>{{ Form::select('department_id',$department,null) }}</td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <td>{{ Form::text('fullname',null) }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ Form::text('email',null) }}</td>
                </tr>
                <tr>
                    <td><input type="submit" value="Update User" class="btn btn-info btn-sm"></td>
                    {{ Form::close() }}  
                </tr>

            </table>
    </div>
</div> 
@endsection
    