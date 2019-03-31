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
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Blank Page</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Page Layouts</span>
        </li>
    </ul>
@endsection

@section('page-title')
    <div class="page-head">
        <div class="page-title">
            <h1>Blank Page Layout
                <small>blank page layout</small>
            </h1>
        </div>
    </div>
@endsection

@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">Title</span>
            </div>
            <div class="actions">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('member.create') }}"> Button</a>
                </div>
            </div>
        </div>
        <div class="portlet-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-error">
                    <p>{{ $message }}</p>
                </div>
            @endif
            kontent
        </div>
    </div>
@endsection
