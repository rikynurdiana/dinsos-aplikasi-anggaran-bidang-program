@extends('layouts.app')

@section('plugin-style')
@endsection

@section('custom-style')
@endsection

@section('plugin-script')
    <script src="{{ env('APP_URL') }}/js/jquery.mask.min.js" type="text/javascript"></script>
@endsection

@section('custom-script')
    <script src="{{ env('APP_URL') }}/js/page/create-kegiatan.js" type="text/javascript"></script>
@endsection

@section('tab-title')
    <title>INPUT MASTER KEGIATAN | DINSOS KBB</title>
@endsection

@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">Tambah Master kegiatan</span>
            </div>
        </div>
        <div class="portlet-body">
            {!! Form::open(array('route' => 'kegiatan.store','method'=>'POST', 'enctype' => 'multipart/form-data', 'files' => 'true')) !!}
                @include('kegiatan.form-create')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
