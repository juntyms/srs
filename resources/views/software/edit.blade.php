@extends('layouts.n')
@section('title','Update Software - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Update Software
        <a href="{{ route('software.index')}}" class="float-end btn btn-sm btn-success">View All Software</a>
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
                {{ Form::model($software,['route'=>['software.update',$software->id]]) }}  
                    <th>Academic Year :</th> 
                    <td>{{ Form::select('ay_id',$ays,null) }}</td>   
                    <th>Software Name :</th>
                    <td>{{ Form::text('name',null) }}</td>  
                    

                </tr>
                <tr>
                    <th>Department :</th>
                    <td>{{ Form::select('department_id',$department,null) }}</td> 
                    <th>Software Vendor :</th>
                    <td>{{ Form::select('software_vendor_id',$softwareVendors,null) }}</td>
                    
                </tr>
                <tr>
                    <th>Software Type :</th>
                    <td>{{ Form::select('software_type_id',$SoftwareType,null) }}</td>
                    <th>Company :</th>
                    <td>{{ Form::select('company_id',$company,null) }}</td>
                                        
                </tr>
                <tr>
                    <th>Purchase Date :</th>                  
                    <td>{{ Form::text('purchase_date',null) }}</td>
                    <th>Price :</th>
                    <td>{{ Form::text('price',null) }}</td>
                    
                    
                </tr>
                <tr>
                    <th>Expiry Date :</th>
                    <td>{{ Form::text('expiry_date', null) }}</td>
                    <th>Warranty End Date :</th>
                    <td>{{ Form::text('warranty_end_date',null) }}</td>
                    
                </tr>
                <tr>
                    <th>License :</th>
                    <td>{{ Form::select('license_id',$License,null ) }}</td>
                    <th>Available :</th>
                    <td>{{ Form::select ('installer_is_available', ['1' => 'Yes', '0' => 'No'], 2 , ['id' =>'installer_is_available']) }}</td>
    
                </tr>
                <tr>
                    <th>Custodian Name :</th>
                    <td>{{ Form::text('custodian_name',null) }}</td>
                    <td colspan="5">
                    <input type="submit" value="Update Software" class="btn btn-info btn-sm"></td>
                </tr>
                {{ Form::close() }}
            </table>
    </div>
</div> 
@endsection
    