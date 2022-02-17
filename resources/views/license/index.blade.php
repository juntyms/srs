@extends('layouts.n')
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
            <table class="table table-bordered">
                <tr>
                    <th colspan="2">License Name</th>
                </tr>
                @foreach ( $license as $license)
                <tr>
                    <td>{{ $license->name }}</td>
                    <td><a href="{{ route('license.edit',$license->id)}}" class="btn btn-info btn-sm">Edit</a>
                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('license.delete',$license->id) }}" class="btn btn-danger btn-sm">delete</a></td>
                </tr>
                @endforeach
            </table>
    </div>
</div> 
@endsection