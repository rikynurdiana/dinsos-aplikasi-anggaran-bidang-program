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
    <title>DETAIL PROGRAM | DINSOS KBB</title>
@endsection

@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">Detail Program</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <select class="form-control edited" id="bidang" name="bidang" disabled>
                            <option value="{{ $response->bidang }}">{{ $response->bidang }}</option>
                            <option value="bidang 1">bidang 1</option>
                            <option value="bidang 2">bidang 2</option>
                            <option value="bidang 3">bidang 3</option>
                        </select>
                        <label for="form_control_1">Bidang: </label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label ">
                        <input type="number" class="form-control edited" id="kode_rekening_program" name="kode_rekening_program" value="{{ $response->kode_rekening_program }}" disabled>
                        <label for="form_control_1">Kode Rekening Program: </label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label ">
                        <input type="text" class="form-control edited" id="nama_program" name="nama_program" value="{{ $response->nama_program }}" disabled>
                        <label for="form_control_1">Nama Program: </label>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('created_at') ? ' has-error' : '' }}">
                        <input type="hidden" class="form-control" id="created_at" name="" value="{{ $response->created_at }}">
                        <input type="text" class="form-control edited" id="created_at" name="created_at" value="{{ $response->created_at ? Carbon\Carbon::createFromTimeStamp($response->created_at)->format('d M Y') : '' }}" disabled>
                        <label for="form_control_1">Dibuat Pada Tanggal: <small class="text-danger">{{ $errors->first('created_at') }}</small></label>
                    </div>

                    <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('updated_at') ? ' has-error' : '' }}">
                        <input type="hidden" class="form-control" id="updated_at" name="" value="{{ $response->updated_at }}">
                        <input type="text" class="form-control edited" id="updated_at" name="updated_at" value="{{ $response->updated_at ? Carbon\Carbon::createFromTimeStamp($response->updated_at)->format('d M Y') : 'belum pernah di perbarui' }}" disabled>
                        <label for="form_control_1">Diperbarui Pada Tanggal: <small class="text-danger">{{ $errors->first('updated_at') }}</small></label>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="clearfix"></div><hr>
                    <a type="button" href="{{ route('program.index') }}" class="btn btn-warning" style="margin-right:30px;">kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
