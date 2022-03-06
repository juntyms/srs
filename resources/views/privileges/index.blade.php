@extends('layouts')
@section('title','Assign Privileges - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Assign Privilege to user
        <a href="{{ route('dashboard')}}" class="float-end btn btn-sm btn-success">Dashboard</a>
    </div>
    <div class="card-body">
    @if(Session::has('msg'))
        <p class="text-danger">{{session('msg')}}</p>
        @else
        <p class="text-success">{{session('ms')}}</p>
        @endif
            @csrf
            <table class="table table-bordered">
                <tr>
                {{ Form::model(['route'=>'privileges.assign']) }}
                    <th>Username:</th>
                    <th>{{ Form::select('user_id',$user,null)}}</th>
                    <th>Privilege:</th> 
                    <th>{{ Form::select('privilege_id',$privilege,null)}}</th>
                    <th><input type="submit" value="Assign Privilege" class="btn btn-info btn-sm"></th>     
                </tr>
                {{ Form::close() }}
            </table>
    </div>
</div>
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Users Roles
    </div>
    <div class="card-body">
            @csrf
            <table id="datatablesSimple" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>System Administrators</th>
                    <th>Departments Coordinators</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach( $userprivileges as $userprivileges )
                    <td>{{ $userprivileges->us->username}}</td>
                    @if($userprivileges->privilege_id==1)
                    <td>System Administrator</td>
                    @else
                    <td>Department Coordinator</td>
                    @endif
                    <td><a onclick="return" href="{{ route('privileges.revoke',$userprivileges->id) }}" class="btn btn-danger btn-sm">Revoke Privilege</a></td>
                </tr>
                    @endforeach
                </tbody>
                </table>
    </div>
    <p style="color:red;"> >> Note: If you want to change user privilege, you have to revoke it first then assign a new privilege.</p>

@endsection
<script src="{{asset('\bootstrap-5.1.3-dist\js\simple-datatables@latest.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('\bootstrap-5.1.3-dist\js\datatables-simple-demo.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('\bootstrap-5.1.3-dist\js\scripts.js')}}" crossorigin="anonymous"></script>