@extends('layouts.n')
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
            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <tr>
                    <th>Academic Years</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach ( $ays as $ays)
                <tr>
                    <td>{{ $ays->name }}</td>
                    @if($ays->is_active==1) 
                        <td>Activated</td> 
                        @else 
                            <td>DeActivated</td> 
                    @endif
                    <td>
                        <a href="{{ route('ays.edit',$ays->id)}}" class="btn btn-info btn-sm">Edit</a>
                        <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('ays.delete',$ays->id)}}" class="btn btn-danger btn-sm">delete</a>
                        <a href="{{ route('ays.update_active',$ays->id) }}" class="btn btn-warning btn-sm">Active This Year</a>
                    </td>
                </tr>
                @endforeach
            </table>
    </div>
</div> 
@endsection