@extends('layouts')
@section('title','Software Vendors - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Software Vendor
        <a href="{{ route('vendor.add')}}" class="float-end btn btn-sm btn-success">Add New Vendor</a>
    </div>
    <div class="card-body">
    @if(Session::has('msg'))
        <p class="text-danger">{{session('msg')}}</p>
        @endif
            @csrf
            <table id="datatablesSimple" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Software Vendor</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $vendor as $vendor)
                <tr>
                    <td>{{ $vendor->name }}</td>
                    <td><a href="{{ route('vendor.edit',$vendor->id)}}" class="btn btn-info btn-sm">Edit</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
</div> 

@endsection