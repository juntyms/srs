@extends('layouts')
@section('title','All Licenses - SRS')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Licenses
        <a href="{{ route('exportExcel') }}" class="float-end btn btn-sm btn-info">export XLS</a>
        <a href="{{ route('software.add')}}" class="float-end btn btn-sm btn-success">Add License</a>
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
                    <th>License Name</th>
                    <th>License Type</th>
                    <th>Subscription Type</th>
                    <th>Version</th>
                    <th>Quantity</th>
                    <th>Purchase Date</th>
                    <th>Total Cost</th>
                    <th>Expiry Date</th>
                    <th>Warranty End Date</th>
                    <th>Supplier</th>
                    <th>Available</th>
                    <th>Company</th>
                    <th>Custodian Name</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                @foreach ( $software as $software )
                    <td>{{ $software->ay->name }}</td>
                    <td>{{ $software->name }}</td>
                    <td>{{ $software->type->name }}</td>  
                    <td>{{ $software->li->name }}</td>
                    <td>{{ $software->version }}</td>  
                    <td>{{ $software->quantity }}</td>  
                    <td>{{ \carbon\carbon::parse($software->purchase_date)->format('d-M-Y') }}</td> 
                    <td>{{ $software->price }} .OMR</td>
                    <td>{{ \carbon\carbon::parse($software->expiry_date)->format('d-M-Y') }}</td>
                    <td>{{ \carbon\carbon::parse($software->warranty_end_date)->format('d-M-Y') }}</td>
                    <td>{{ $software->vendor->name }}</td>
                    <td>{{ ($software->installer_is_available)? 'Yes':'No' }}</td>
                    <td>{{ $software->comp->name }}</td>
                    <td>{{ $software->custodian_name }}</td> 
                    <td>{{ $software->dept->name}}</td> 
                    <td><a href="{{ route('software.edit',$software->id)}}" class="btn btn-info btn-sm">Edit</a>
                        @if(Auth::user()->privilege->privilege_id == 1)
                        <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('software.delete',$software->id) }}" class="btn btn-danger btn-sm">delete</a>
                        @endif
                    </td>
                </tr> 
                @endforeach 
            </tbody>
            </table>
</div>
</div>
@endsection