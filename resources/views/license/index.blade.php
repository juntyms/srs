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
            <table id="datatablesSimple" class="table table-striped table-bordered">
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
                    @if(Auth::user()->privilege->privilege_id == 1)
                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('license.delete',$license->id) }}" class="btn btn-danger btn-sm">delete</a>
                    @endif
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div>   
</html>
@endsection