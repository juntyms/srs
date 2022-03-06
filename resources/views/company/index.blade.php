@extends('layouts')
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
            <table id="datatablesSimple" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Contact No. </th>
                    <th>Company Address </th>
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
                    <td><a href="{{ route('company.edit',$company->id)}}" class="btn btn-info btn-sm">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div> 
</body>
</html>
<script src="{{asset('\bootstrap-5.1.3-dist\js\simple-datatables@latest.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('\bootstrap-5.1.3-dist\js\datatables-simple-demo.js')}}" crossorigin="anonymous"></script>
<script src="{{asset('\bootstrap-5.1.3-dist\js\scripts.js')}}" crossorigin="anonymous"></script>

@endsection