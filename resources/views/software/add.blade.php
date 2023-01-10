@extends('layouts')
@section('title','Add License - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Add License
        <a href="{{ route('software.index')}}" class="float-end btn btn-sm btn-success">View All Licenses</a>
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
            {{ Form::open(['route'=>'software.save']) }}  
                <tr>
                    <th>Academic Year :</th> 
                    <td>{{ Form::select('ay_id',$ays,null, ['class'=>'form-select','placeholder'=>'Select Academic Year','required']) }}</td>   
                    <th>License Name :</th>
                    <td>{{ Form::text('name',null, ['class'=>'form-control']) }}</td>  
                </tr>
                <tr>
                    <th>Version :</th> 
                    <td>{{ Form::text('version',null, ['class'=>'form-control']) }}</td>   
                    <th>Quantity :</th>
                    <td>{{ Form::text('quantity',null, ['class'=>'form-control']) }}</td>  
                </tr>
                <tr>
                    <th>Department :</th>
                    <td>{{ Form::select('department_id',$department,null, ['class'=>'form-select','placeholder'=>'Select Department','required']) }}</td> 
                    <th>Supplier :</th>
                    <td>{{ Form::select('software_vendor_id',$softwareVendors,null, ['class'=>'form-select','placeholder'=>'Select Supplier','required']) }}</td>                   
                </tr>
                <tr>
                    <th>License Type :</th>
                    <td>{{ Form::select('software_type_id',$SoftwareType,null, ['class'=>'form-select','placeholder'=>'Select Licenses Type','required']) }}</td>
                    <th>Company :</th>
                    <td>{{ Form::select('company_id',$company,null, ['class'=>'form-select','placeholder'=>'Select Company','required']) }}</td>                                 
                </tr>
                <tr>
                    <th>Purchase Date :</th>                  
                    <td>{{ Form::date('purchase_date',null,['class'=>'form-control']) }}</td>
                    <th>Total Price :</th>
                    <td>{{ Form::text('price',null, ['class'=>'form-control']) }}</td>                   
                </tr>
                <tr>
                    <th>Expiry Date :</th>
                    <td>{{ Form::date('expiry_date', null, ['class'=>'form-control']) }}</td>
                    <th>Warranty End Date :</th>
                    <td>{{ Form::date('warranty_end_date',null, ['class'=>'form-control']) }}</td>                    
                </tr>
                <tr>
                    <th>Subscription :</th>
                    <td>{{ Form::select('license_id',$License,null, ['class'=>'form-select','placeholder'=>'Select Subscription','required'] ) }}</td>
                    <th>Available :</th>
                    <td>{{ Form::select ('installer_is_available', ['1' => 'Yes', '0' => 'No'], 2 , ['class'=>'form-select','id' =>'installer_is_available']) }}</td>
                </tr>
                <tr>
                    <th>Custodian Name :</th>
                    <td colspan="3">{{ Form::text('custodian_name',null, ['class'=>'form-control']) }}</td>
                </tr>
                <tr>
                <td colspan="4">
                    <input type="submit" value="Add Software" class="btn btn-info btn-sm"></td>
                </tr>
                {{ Form::close() }} 
            </table>
    </div>
</div> 
@endsection