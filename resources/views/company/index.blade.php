@extends('layouts.n')
@section('title','Companies - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Companies
        <a href="{{ route('company.add')}}" class="float-end btn btn-sm btn-success">Add New Company</a>
    </div>
    <div class="card-body">
    @if(Session::has('msg'))
        <p class="text-danger">{{session('msg')}}</p>
        @endif
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Contact No. </th>
                    <th>Company Address </th>
                    <th>GSM Number</th>
                    <th>Contact Person</th>
                    <th>Action</th>
                </tr>
                @foreach ( $company as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->contact_no }}</td>
                    <td>{{ $company->address }}</td>
                    <td>{{ $company->gsm }}</td>
                    <td>{{ $company->contact_person }}</td>
                    <td><a href="{{ route('company.edit',$company->id)}}" class="btn btn-info btn-sm">Edit</a></td>
                </tr>
                @endforeach
            </table>
    </div>
</div> 
</body>
</html>
@endsection