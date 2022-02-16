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
                    <th>Actions</th>

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
                    <td><a href="{{ route('software.edit',$software->id)}}" class="btn btn-info btn-sm">Edit</a>
                        <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('software.delete',$software->id) }}" class="btn btn-danger btn-sm">delete</a>
                    </td>
                </tr> 
                @endforeach 
            </table>
</div>
</div>
@endsection