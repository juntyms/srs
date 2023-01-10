@extends('layouts')
@section('title','Subscriptions - SRS')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        View Subscriptions
        @if(Auth::user()->privilege->privilege_id == 1)
        <a href="{{ route('subscription.add')}}" class="float-end btn btn-sm btn-success">Add New Subscription</a>
        @endif
    </div>
    <div class="card-body">
    @if(Session::has('msg'))
        <p class="text-danger">{{session('msg')}}</p>
        @endif
            @csrf
            <table id="datatablesSimple" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Subscription Name</th>
                    @if(Auth::user()->privilege->privilege_id == 1)
                    <th>Action</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach ( $license as $license)
                <tr>
                    <td>{{ $license->name }}</td>
                    @if(Auth::user()->privilege->privilege_id == 1)
                    <td>
                        <a href="{{ route('subscription.edit',$license->id)}}" class="btn btn-info btn-sm">Edit</a>
                        <a onclick="return confirm('Are you sure to delete this data?')" href="{{ route('subscription.delete',$license->id) }}" class="btn btn-danger btn-sm">delete</a>
                    </td>
                    @endif

                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
</div>   
</html>
@endsection