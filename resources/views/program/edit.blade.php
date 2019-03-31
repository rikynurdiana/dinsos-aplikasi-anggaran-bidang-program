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
    <title>EDIT MASTER PROGRAM | DINSOS KBB</title>
@endsection

@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">Edit Master Program</span>
            </div>
        </div>
        <div class="portlet-body">
            {!! Form::model($response, ['method' => 'PATCH','route' => ['program.update', $response->id], 'enctype' => 'multipart/form-data', 'files' => 'true']) !!}
                @include('program.form-edit')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
