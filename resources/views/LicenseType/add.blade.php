@extends('layouts')
@section('title','Add New License Type - SRS')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Add License Type
        <a href="{{ route('LicenseType.index')}}" class="float-end btn btn-sm btn-success">View All License Types</a>
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
            {{ Form::open(['route'=>'LicenseType.save']) }} 
                <tr>
                    <th>License Type :</th>
                    <th>{{ Form::text('name',null, ['class'=>'form-control']) }}</th>
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="Add Type" class="btn btn-info btn-sm"></th>      
                </tr>
            {{ Form::close() }}
            </table>
    </div>
</div> 
@endsection