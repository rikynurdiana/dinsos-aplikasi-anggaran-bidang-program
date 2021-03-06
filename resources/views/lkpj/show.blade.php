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
    <script src="{{ env('APP_URL') }}/js/page/create-lkpj.js" type="text/javascript"></script>
@endsection

@section('tab-title')
    <title>DETAIL KEGIATAN | DINSOS KBB</title>
@endsection

@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">Detail Kegiatan</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('nama_program') ? ' has-error' : '' }}">
                        <select class="form-control" id="nama_program" name="nama_program" disabled>
                            <option value="{{ $response->nama_program }}">{{ $response->nama_program }}</option>
                        </select>
                        <label for="form_control_1">Program: <small class="text-danger">{{ $errors->first('nama_program') }}</small></label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('nama_kegiatan') ? ' has-error' : '' }}">
                        <select class="form-control edited" id="nama_kegiatan" name="nama_kegiatan" disabled>
                            <option value="{{ $response->nama_kegiatan }}">{{ $response->nama_kegiatan }}</option>
                        </select>
                        <label for="form_control_1">Kegiatan: <small class="text-danger">{{ $errors->first('nama_kegiatan') }}</small></label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('anggaran') ? ' has-error' : '' }}">
                        <input type="text" class="money form-control" id="anggaran" name="anggaran" value="{{ $response->anggaran }}" disabled>
                        <label for="form_control_1">Anggaran: <small class="text-danger">{{ $errors->first('anggaran') }}</small></label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('realisasi') ? ' has-error' : '' }}">
                        <input type="text" class="money form-control" id="realisasi" name="realisasi" value="{{ $response->realisasi }}" disabled>
                        <label for="form_control_1">Realisasi: <small class="text-danger">{{ $errors->first('realisasi') }}</small></label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('persentase') ? ' has-error' : '' }}">
                        <input type="text" class="form-control" id="persentase" name="persentase" value="{{ $response->persentase }}" disabled>
                        <label for="form_control_1">Persentase: <small class="text-danger">{{ $errors->first('persentase') }}</small></label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('hasil_kegiatan') ? ' has-error' : '' }}">
                        <textarea class="form-control" rows="5" id="hasil_kegiatan" name="hasil_kegiatan" disabled>{{ $response->hasil_kegiatan }}</textarea>
                        <label for="form_control_1">Hasil Kegiatan: <small class="text-danger">{{ $errors->first('hasil_kegiatan') }}</small></label>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('bidang') ? ' has-error' : '' }}">
                        <input type="text" class="form-control edited" id="bidang" name="bidang" value="{{ $response->bidang }}" disabled>
                        <label for="form_control_1">Bidang: <small class="text-danger">{{ $errors->first('bidang') }}</small></label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('kode_rekening_program') ? ' has-error' : '' }}">
                        <input type="text" class="form-control edited" id="kode_rekening_program" name="kode_rekening_program" value="{{ $response->kode_rekening_program }}" disabled>
                        <label for="form_control_1">Kode Rekening Program: <small class="text-danger">{{ $errors->first('kode_rekening_program') }}</small></label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('kode_rekening_kegiatan') ? ' has-error' : '' }}">
                        <input type="number" class="form-control edited" id="kode_rekening_kegiatan" name="kode_rekening_kegiatan" value="{{ $response->kode_rekening_kegiatan }}" disabled>
                        <label for="form_control_1">Kode Rekening Kegiatan: <small class="text-danger">{{ $errors->first('kode_rekening_kegiatan') }}</small></label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('created_at') ? ' has-error' : '' }}">
                        <input type="hidden" class="form-control" id="created_at" name="created_at" value="{{ $response->created_at }}">
                        <input type="text" class="form-control edited" id="created_at" name="" value="{{ $response->created_at ? Carbon\Carbon::createFromTimeStamp($response->created_at)->format('d M Y') : '' }}" disabled>
                        <label for="form_control_1">Dibuat Pada Tanggal: <small class="text-danger">{{ $errors->first('created_at') }}</small></label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('updated_at') ? ' has-error' : '' }}">
                        <input type="hidden" class="form-control" id="updated_at" name="updated_at" value="{{ $response->updated_at }}">
                        <input type="text" class="form-control edited" id="updated_at" name="" value="{{ $response->updated_at ? Carbon\Carbon::createFromTimeStamp($response->updated_at)->format('d M Y') : 'belum pernah di perbarui' }}" disabled>
                        <label for="form_control_1">Diperbarui Pada Tanggal: <small class="text-danger">{{ $errors->first('updated_at') }}</small></label>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="clearfix"></div><hr>
                    <a type="button" href="{{ route('lkpj.index') }}" class="btn btn-warning" style="margin-right:30px;">Batal</a>
                </div>
            </div>


        </div>
    </div>
@endsection
