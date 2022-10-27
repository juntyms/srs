@extends('layouts')
@section('title','Licenses - SRS')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Licenses
        <a href="{{ route('license.add')}}" class="float-end btn btn-sm btn-success">Create New License</a>
    </div>
    <div class="card-body">
    @if(Session::has('msg'))
        <p class="text-danger">{{session('msg')}}</p>
        @endif
            @csrf
            <table id="datatablesSimple" class="table table-bordered">
                <thead>
                <tr>
                    <th>License Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $license as $license)
                <tr>
                    <td>{{ $license->name }}</td>
                    <td><a href="{{ route('license.edit',$license->id)}}" class="btn btn-info btn-sm">Edit</a>
                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('license.delete',$license->id) }}" class="btn btn-danger btn-sm">delete</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div> 
<script src="{{asset('\bootstrap-5.1.3-dist\js\simple-datatables@latest.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('\bootstrap-5.1.3-dist\js\datatables-simple-demo.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('\bootstrap-5.1.3-dist\js\scripts.js')}}" crossorigin="anonymous"></script>
@endsection