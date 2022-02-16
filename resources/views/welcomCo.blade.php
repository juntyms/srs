@extends('layouts.co')
@section('title','All Software - SRS')
@section('content')
<div class="card mb-2 mt-2">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Software
    </div>
    <div class="card-body">
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>Academic Year</th>    
                    <th>Software Name</th>
                    <th>Department </th>
                    <th>Software Vendor</th>
                    <th>Software Type</th>
                    <th>Company </th>
                    <th>Purchase Date</th>
                    <th>Price</th>
                    <th>Expiry Date</th>
                    <th>Warranty End Date</th>
                    <th>License </th>
                    <th>Available</th>
                    <th>Custodian Name</th>

                </tr>   
                <tr>
                @foreach ( $software as $software )
                    <td>{{ $software->ay->name }}</td>
                    <td>{{ $software->name }}</td>  
                    <td>{{ $software->dept->name}}</td> 
                    <td>{{ $software->vendor->name }}</td>
                    <td>{{ $software->type->name }}</td>
                    <td>{{ $software->comp->name }}</td>
                    <td>{{ $software->purchase_date }}</td>
                    <td>{{ $software->price }}</td>
                    <td>{{ $software->expiry_date }}</td>
                    <td>{{ $software->warranty_end_date }}</td>
                    <td>{{ $software->li->name }}</td>
                    <td>{{ ($software->installer_is_available)? 'Yes':'No' }}</td>
                    <td>{{ $software->custodian_name }}</td>    
                </tr>
                @endforeach 
            </table>
@endsection