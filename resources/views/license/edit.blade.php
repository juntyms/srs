@extends('layouts')
@section('title','Update License - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Update License
        <a href="{{ route('license.index')}}" class="float-end btn btn-sm btn-success">View All Licenses</a>
    </div>
    <div class="card-body">
    @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif
        
    @if(Session::has('msg'))
        <p class="text-success">{{session('msg')}}</p>
        @endif
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>License Name</th>
                    <th>Action</th>
                </tr>
                <tr>
                {{ Form::model($license,['route'=>['license.update',$license->id]]) }}  
                    <td>{{ Form::text('name',null) }}</td>
                    <td><input type="submit" value="Update License" class="btn btn-info btn-sm"></td>
                </tr>
            </table>
    </div>
</div> 
{{ Form::close() }}
@endsection