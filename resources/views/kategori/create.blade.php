@extends('layouts.app')

@section('plugin-style')
    <link href="{{ env('APP_URL') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <link href="{{ env('APP_URL') }}/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
@endsection

@section('custom-style')
@endsection

@section('plugin-script')
    <script src="{{ env('APP_URL') }}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
    <script src="{{ env('APP_URL') }}/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
    <script src="{{ env('APP_URL') }}/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
@endsection

@section('custom-script')
    <script>
        $("#sudah_ditangani").change(function(){
            var j = $('#jumlah_orang').val();

            var s = $('#sudah_ditangani').val();

            var b = $('#belum_ditangani').val(j - s);
        });
    </script>
    <script src="{{ env('APP_URL') }}/assets/pages/scripts/components-editors.min.js" type="text/javascript"></script>
@endsection

@section('tab-title')
    <title>INPUT PMKS | DINSOS KBB</title>
@endsection

@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">Tambah Data Jenis PMKS</span>
            </div>
        </div>
        <div class="portlet-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ada masalah input data.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::open(array('route' => 'kategori-pmks.store','method'=>'POST', 'enctype' => 'multipart/form-data', 'files' => 'true')) !!}
                @include('kategori.form-create')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
