@extends('layouts')
@section('title','License Types - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View License Types
        @if(Auth::user()->privilege->privilege_id == 1)
        <a href="{{ route('LicenseType.add')}}" class="float-end btn btn-sm btn-success">Add License Type</a>
        @endif
    </div>
    <div class="card-body">
    @if(Session::has('msg'))
        <p class="text-danger">{{session('msg')}}</p>
        @endif
            @csrf
            <table id="datatablesSimple" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>                <tr>
                    <th>License Types</th>
                    @if(Auth::user()->privilege->privilege_id == 1)
                    <th>Action</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach ( $SoftwareType as $SoftwareType)
                <tr>
                    <td>{{ $SoftwareType->name }}</td>
                    @if(Auth::user()->privilege->privilege_id == 1)
                    <td>
                        <a href="{{ route('LicenseType.edit',$SoftwareType->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('LicenseType.delete',$SoftwareType->id) }}" class="btn btn-danger btn-sm">delete</a>
                    </td>
                    @endif
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
</div> 
@endsection