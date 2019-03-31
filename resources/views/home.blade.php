@extends('layouts.app')

@section('plugin-style')
@endsection

@section('custom-style')
@endsection

@section('plugin-script')
@endsection

@section('custom-script')
@endsection

@section('tab-title')
    <title>Metronic Admin Theme #1 | Blank Page Layout</title>
@endsection

@section('breadcrumb')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ env('APP_URL') }}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
        </ul>
    </div>
@endsection

@section('page-title')
    <h1 class="page-title"> Home
        <small>Home Page</small>
    </h1>
@endsection

@section('page-content')
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        You are logged in as {{ Auth::user()->name }}!
    </div>
@endsection
