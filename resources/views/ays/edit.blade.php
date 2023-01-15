@extends('layouts')
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
                    {{ Form::model($ays,['route'=>['ays.update',$ays->id]]) }} 
                    <th>{{ Form::text('name',null, ['class'=>'form-control']) }}</th>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Save Changes" class="btn btn-primary btn-sm"></td>
                </tr>
            </table>
    </div>
</div> 
{{ Form::close() }}
@endsection