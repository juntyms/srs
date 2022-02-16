@extends('layouts.n')
@section('title','Update Company - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Update Company
        <a href="{{ route('company.index')}}" class="float-end btn btn-sm btn-success">View All Companies</a>
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
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Contact No. </th>         
                </tr>
                <tr>
                {{ Form::model($company,['route'=>['company.update',$company->id]]) }}  
                    <td>{{ Form::text('name',null) }}</td>
                    <td>{{ Form::text('email',null) }}</td> 
                    <td>{{ Form::text('contact_no',null) }}</td>
                </tr>
                <tr>
                    <th>Company Address </th>
                    <th>GSM Number</th>
                    <th>Contact Person</th>          
                </tr>
                <tr>
                    <td>{{ Form::text('address',null) }}</td>
                    <td>{{ Form::text('gsm',null) }}</td>
                    <td>{{ Form::text('contact_person',null) }}</td> 
                </tr>
                <tr>
   
                    <th style="text-align:right;" colspan="3"><input type="submit" value="Update Company" class="btn btn-info btn-sm"></th>
                </tr>
                {{ Form::close() }} 
            </table>
    </div>
</div> 
{{ Form::close() }}
@endsection
    