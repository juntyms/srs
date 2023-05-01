@extends('layouts')
@section('title','Suppliers - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Suppliers
        <a href="{{ route('company.add')}}" class="float-end btn btn-sm btn-success">Add New Supplier</a>
    </div>
    <div class="card-body">
    @if(Session::has('msg'))
        <p class="text-danger">{{session('msg')}}</p>
        @endif
            @csrf
            <table id="datatablesSimple" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Supplier Name</th>
                    <th>Email</th>
                    <th>Contact No. </th>
                    <th>Supplier Address </th>
                    <th>GSM Number</th>
                    <th>Contact Person</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $company as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->contact_no }}</td>
                    <td>{{ $company->address }}</td>
                    <td>{{ $company->gsm }}</td>
                    <td>{{ $company->contact_person }}</td>
                    <td><a href="{{ route('company.edit',$company->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div> 
</body>
</html>

@endsection