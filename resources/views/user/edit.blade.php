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
                    <td>{{ Form::text('username',null, ['class'=>'form-control']) }}</td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>{{ Form::text('password',null, ['class'=>'form-control']) }}</td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td>{{ Form::select('department_id',$department, null, ['class'=>'form-select','placeholder'=>'Select Department','required']) }}</td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <td>{{ Form::text('fullname',null, ['class'=>'form-control']) }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ Form::text('email',null, ['class'=>'form-control']) }}</td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Save Changes" class="btn btn-info btn-sm"></td>
                    {{ Form::close() }}  
                </tr>

            </table>
    </div>
</div> 
@endsection
    