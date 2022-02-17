@extends('layouts.n')
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
            <table class="table table-bordered">
                <tr>
                    <th colspan="2">Software Types</th>
                </tr>
                @foreach ( $SoftwareType as $SoftwareType)
                <tr>
                    <td>{{ $SoftwareType->name }}</td>
                    <td><a href="{{ route('SoftwareType.edit',$SoftwareType->id)}}" class="btn btn-info btn-sm">Edit</a>
                    <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('SoftwareType.delete',$SoftwareType->id) }}" class="btn btn-danger btn-sm">delete</a></td>
                </tr>
                @endforeach
            </table>
    </div>
</div> 
@endsection