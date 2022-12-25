@extends('layouts')
@section('title','Software Types - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Software Types
        <a href="{{ route('SoftwareType.add')}}" class="float-end btn btn-sm btn-success">Add Software Type</a>
    </div>
    <div class="card-body">
    @if(Session::has('msg'))
        <p class="text-danger">{{session('msg')}}</p>
        @endif
            @csrf
            <table id="datatablesSimple" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>                <tr>
                    <th>Software Types</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $SoftwareType as $SoftwareType)
                <tr>
                    <td>{{ $SoftwareType->name }}</td>
                    <td>
                        <a href="{{ route('SoftwareType.edit',$SoftwareType->id)}}" class="btn btn-info btn-sm">Edit</a>
                        @if(Auth::user()->privilege->privilege_id == 1)
                        <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('SoftwareType.delete',$SoftwareType->id) }}" class="btn btn-danger btn-sm">delete</a>
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
</div> 
@endsection