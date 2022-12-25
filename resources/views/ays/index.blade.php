@extends('layouts')
@section('title','Academic Years - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Academic Years
        <a href="{{ route('ays.add')}}" class="float-end btn btn-sm btn-success">Add New AC/Year</a>
    </div>
    <div class="card-body">
    @if(Session::has('msg'))
        <p class="text-danger">{{session('msg')}}</p>
        @endif
            @csrf
            <table id="datatablesSimple" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Academic Years</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $ays as $ays)
                <tr>
                    <td>{{ $ays->name }}</td>
                    @if($ays->is_active==1) 
                        <td><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </td> 
                        @else 
                            <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="darkred" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                            </svg>
                            </td> 
                    @endif
                    <td>
                        <a href="{{ route('ays.edit',$ays->id)}}" class="btn btn-info btn-sm">Edit</a>
                        <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('ays.delete',$ays->id)}}" class="btn btn-danger btn-sm">delete</a>
                        <a href="{{ route('ays.update_active',$ays->id) }}" class="btn btn-warning btn-sm">Active This Year</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div> 


@endsection