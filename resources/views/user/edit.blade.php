@extends('layouts.n')
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
                    <th>Username</th>
                    <th>Password</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <tr>
                {{ Form::model($user,['route'=>['user.update',$user->id]]) }}  
                    <td>{{ Form::text('username',null) }}</td>
                    <td>{{ Form::text('password',null) }}</td>
                    <td>{{ Form::text('fullname',null) }}</td>
                    <td>{{ Form::text('email',null) }}</td>
                    <td><input type="submit" value="Update User" class="btn btn-info btn-sm"></td>
                    {{ Form::close() }}
                </tr>
            </table>
    </div>
</div> 
@endsection
    