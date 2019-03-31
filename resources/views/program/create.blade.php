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
    <title>INPUT MASTER PROGRAM | DINSOS KBB</title>
@endsection

@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">Tambah Master Program</span>
            </div>
        </div>
        <div class="portlet-body">
            {!! Form::open(array('route' => 'program.store','method'=>'POST', 'enctype' => 'multipart/form-data', 'files' => 'true')) !!}
                @include('program.form-create')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
