@extends('layouts.app')

@section('plugin-style')
@endsection

@section('custom-style')
@endsection

@section('plugin-script')
    <script src="{{ env('APP_URL') }}/js/jquery.mask.min.js" type="text/javascript"></script>
@endsection

@section('custom-script')
    <script src="{{ env('APP_URL') }}/js/page/edit-kegiatan.js" type="text/javascript"></script>
@endsection

@section('tab-title')
    <title>EDIT MASTER KEGIATAN | DINSOS KBB</title>
@endsection

@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">Edit Master Kegiatan</span>
            </div>
        </div>
        <div class="portlet-body">
            {!! Form::model($response['response'], ['method' => 'PATCH','route' => ['kegiatan.update', $response['response']->id], 'enctype' => 'multipart/form-data', 'files' => 'true']) !!}
                @include('kegiatan.form-edit')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
