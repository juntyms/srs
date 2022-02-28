@extends('layouts.n')
@section('title','Dashboard - SRS')
@section('content')

      @if (!empty(Auth::user()->privilege->privilege_id))
      @if(Auth::user()->privilege->privilege_id == 1)
            @include('dashboards.admin')
      @else
            @include('dashboards.coordinator')
      @endif
      @endif

@endsection