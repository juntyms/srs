@extends('layouts.n')
@section('title','Update Software Vendor - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Software Vendors
        <a href="{{ route('vendor.index')}}" class="float-end btn btn-sm btn-success">View All Vendors</a>
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
                    <th>Software Vendor</th>
                    <th>Action</th>
                </tr>
                <tr>
                {{ Form::model($vendor,['route'=>['vendor.update',$vendor->id]]) }}
                    <td>{{ Form::text('name',null) }}</td>
                    <td><input type="submit" value="Update Vendor" class="btn btn-info btn-sm"></td>
                    {{ Form::close() }}
                </tr>
            </table>
    </div>
</div> 
@endsection