@extends('layouts.n')
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
            <table class="table table-bordered">
                <tr>
                    <th colspan="2">Software Vendor</th>
                </tr>
                @foreach ( $vendor as $vendor)
                <tr>
                    <td>{{ $vendor->name }}</td>
                    <td><a href="{{ route('vendor.edit',$vendor->id)}}" class="btn btn-info btn-sm">Edit</a></td>
                </tr>
                @endforeach
            </table>
    </div>
</div> 
@endsection