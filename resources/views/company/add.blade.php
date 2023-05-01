@extends('layouts')
@section('title','Add New Supplier - SRS')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Add New Supplier
        <a href="{{ route('company.index')}}" class="float-end btn btn-sm btn-success">View All Suppliers</a>
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
            {{ Form::open(['route'=>'company.save']) }}
                <tr>
                    <th>Supplier Name</th>
                    <th>{{ Form::text('name',null, ['class'=>'form-control']) }}</th>
                </tr>
                <tr>
                    <th>Email</th>
                    <th>{{ Form::text('email',null, ['class'=>'form-control']) }}</th> 
                </tr>
                <tr>
                    <th>Contact No. </th>         
                    <th>{{ Form::text('contact_no',null, ['class'=>'form-control']) }}</th>
                </tr>
                <tr>
                    <th>Supplier Address </th>
                    <th>{{ Form::text('address',null, ['class'=>'form-control']) }}</th>
                </tr>
                <tr>
                    <th>GSM Number</th>
                    <th>{{ Form::text('gsm',null, ['class'=>'form-control']) }}</th>
                </tr>
                <tr>
                    <th>Contact Person</th>
                    <th>{{ Form::text('contact_person',null, ['class'=>'form-control']) }}</th>           
                </tr>
                <tr>
                    <th colspan="2"><input type="submit" value="Add Company" class="btn btn-primary btn-sm"></th>
                </tr>
            {{ Form::close() }}    
            </table>
    </div>
</div> 
@endsection