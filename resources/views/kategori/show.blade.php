@extends('layouts.app')

@section('plugin-style')
    <link href="{{ env('APP_URL') }}/assets/pages/css/blog.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('custom-style')
@endsection

@section('plugin-script')
@endsection

@section('custom-script')
@endsection

@section('tab-title')
    <title>DETAIL PMKS | DINSOS KBB</title>
@endsection

@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">Detail Kategori PMKS</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group form-md-line-input form-md-floating-label ">
                        <input type="text" class="form-control" value="{{ $masters->bidang }}" disabled>
                        <label for="form_control_1">Bidang: </label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label ">
                        <input type="text" class="form-control" value="{{ $masters->kategori }}" disabled>
                        <label for="form_control_1">kategori PMKS: </label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label ">
                        <textarea class="form-control" disabled>{!! html_entity_decode($masters->deskripsi, ENT_QUOTES, 'UTF-8') !!}</textarea>
                        <label for="form_control_1">Deskripsi: </label>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="jumlah_orang" value="{{ $masters->jumlah_orang }}" disabled>
                        <label for="form_control_1">Jumlah Keseluruhan Orang:</label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="sudah_ditangani" value="{{ $masters->sudah_ditangani }}" disabled>
                        <label for="form_control_1">Sudan Ditangani:</label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="belum_ditangani" value="{{ $masters->belum_ditangani }}" disabled>
                        <label for="form_control_1">Belum Ditangani:</label>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="clearfix"></div><hr>
                    <a type="button" href="{{ route('kategori-pmks.index') }}" class="btn btn-success" style="margin-right:30px;">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
