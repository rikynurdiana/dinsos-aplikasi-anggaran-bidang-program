@extends('layouts.app')

@section('plugin-style')
@endsection

@section('custom-style')
@endsection

@section('plugin-script')
    <script src="{{ env('APP_URL') }}/js/jquery.mask.min.js" type="text/javascript"></script>
@endsection

@section('custom-script')
    <script>
        var app_url = '{{ env('APP_URL') }}';
    </script>
    <script src="{{ env('APP_URL') }}/js/page/edit-lkpj.js" type="text/javascript"></script>
@endsection

@section('tab-title')
    <title>EDIT KPJ | DINSOS KBB</title>
@endsection

@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">Edit Data LKPJ</span>
            </div>
        </div>
        <div class="portlet-body">
            {!! Form::model($response['response'], ['method' => 'PATCH','route' => ['lkpj.update', $response['response']->id], 'enctype' => 'multipart/form-data', 'files' => 'true']) !!}
                @include('lkpj.form-edit')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
