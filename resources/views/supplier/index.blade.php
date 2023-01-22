@extends('layouts')
@section('title','Suppliers - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Software Supplier
        @if(Auth::user()->privilege->privilege_id == 1)
        <a href="{{ route('supplier.add')}}" class="float-end btn btn-sm btn-success">Add New Supplier</a>
        @endif
    </div>
    <div class="card-body">
    @if(Session::has('msg'))
        <p class="text-danger">{{session('msg')}}</p>
        @endif
            @csrf
            <table id="datatablesSimple" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Software Supplier</th>
                    @if(Auth::user()->privilege->privilege_id == 1)
                    <th>Action</th>
                    @endif 
                </tr>
                </thead>
                <tbody>
                @foreach ( $vendor as $vendor)
                <tr>
                    <td>{{ $vendor->name }}</td>
                    @if(Auth::user()->privilege->privilege_id == 1)
                    <td><a href="{{ route('supplier.edit',$vendor->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                    @endif
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
</div> 

@endsection