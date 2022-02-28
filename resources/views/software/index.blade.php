@extends('layouts.n')
@section('title','All Software - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Software
        <a href="{{ route('software.add')}}" class="float-end btn btn-sm btn-success">Add Software</a>
    </div>
    <div class="card-body">
    @if(Session::has('msg'))
        <p class="text-success">{{session('msg')}}</p>
        @endif
            @csrf
            <table id="datatablesSimple" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>AY</th>    
                    <th>Name</th>
                    <th>Department </th>
                    <th>Vendor</th>
                    <th>Type</th>
                    <th>Company </th>
                    <th>Purchase Date</th>
                    <th>Price</th>
                    <th>Expiry Date</th>
                    <th>Warranty End Date</th>
                    <th>License </th>
                    <th>Available</th>
                    <th>Custodian Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                @foreach ( $software as $software )
                    <td>{{ $software->ay->name }}</td>
                    <td>{{ $software->name }}</td>  
                    <td>{{ $software->dept->name}}</td> 
                    <td>{{ $software->vendor->name }}</td>
                    <td>{{ $software->type->name }}</td>
                    <td>{{ $software->comp->name }}</td>
                    <td>{{ \carbon\carbon::parse($software->purchase_date)->format('d-M-Y') }}</td> 

                    <td>{{ $software->price }} .OMR</td>
                    <td>{{ \carbon\carbon::parse($software->expiry_date)->format('d-M-Y') }}</td>
                    <td>{{ \carbon\carbon::parse($software->warranty_end_date)->format('d-M-Y') }}</td>
                    <td>{{ $software->li->name }}</td>
                    <td>{{ ($software->installer_is_available)? 'Yes':'No' }}</td>
                    <td>{{ $software->custodian_name }}</td> 
                    <td><a href="{{ route('software.edit',$software->id)}}" class="btn btn-info btn-sm">Edit</a>
                        <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('software.delete',$software->id) }}" class="btn btn-danger btn-sm">delete</a>
                    </td>
                </tr> 
                @endforeach 
            </tbody>
            </table>
</div>
</div>
<script src="{{asset('\bootstrap-5.1.3-dist\js\simple-datatables@latest.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('\bootstrap-5.1.3-dist\js\datatables-simple-demo.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('\bootstrap-5.1.3-dist\js\scripts.js')}}" crossorigin="anonymous"></script>
@endsection