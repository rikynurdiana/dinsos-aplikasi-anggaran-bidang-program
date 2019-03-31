@extends('layouts.app')

@section('plugin-style')
@endsection

@section('custom-style')
@endsection

@section('plugin-script')
@endsection

@section('custom-script')
    <script>
        var app_url = '{{ env('APP_URL') }}';
    </script>
@endsection

@section('tab-title')
    <title>INPUT LPPD | DINSOS KBB</title>
@endsection

@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">Lengkapi Data LPPD</span>
            </div>
            <div class="actions">
                <div class="pull-right">
                    <a style="margin-left:20px" class="btn btn-success" href="{{ route('lppd.index') }}"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </div>
        <div class="portlet-body">
            {!! Form::open(array('route' => 'lppd.store','method'=>'POST', 'enctype' => 'multipart/form-data', 'files' => 'true')) !!}
                @include('lppd.form-create')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
