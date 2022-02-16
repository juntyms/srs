@extends('layouts.n')
@section('title','Update Academic Year - SRS')
@section('content')

<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Update Academic Year
        <a href="{{ route('ays.index')}}" class="float-end btn btn-sm btn-success">View All AC/Years</a>
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
                    <th>Academic Year</th>
                    <th>Action</th>
                </tr>
                <tr>
                {{ Form::model($ays,['route'=>['ays.update',$ays->id]]) }} 
                    <td>{{ Form::text('name',null) }}</td>
                    <td><input type="submit" value="Update Academic Year" class="btn btn-info btn-sm"></td>
                </tr>
            </table>
    </div>
</div> 
{{ Form::close() }}
@endsection