<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('nama_program') ? ' has-error' : '' }}">
            <select class="form-control" id="nama_program" name="nama_program">
                @foreach ($response['program'] as $key => $p)
                    <option {{ ($p->kode_rekening_program == $response['response']->kode_rekening_program) ? 'selected' : '' }}  data-bidang="{{ $p->bidang }}" data-kode="{{ $p->kode_rekening_program }}" value="{{ $p->nama_program }}">{{ $p->nama_program }}</option>
                @endforeach
            </select>
            <label for="form_control_1">Program: <small class="text-danger">{{ $errors->first('nama_program') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('kode_rekening_kegiatan') ? ' has-error' : '' }}">
            <input type="text" class="form-control" id="kode_rekening_kegiatan" name="kode_rekening_kegiatan" value="{{ $response['response']->kode_rekening_kegiatan }}">
            <label for="form_control_1">Kode Rekening Kegiatan: <small class="text-danger">{{ $errors->first('kode_rekening_kegiatan') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('nama_kegiatan') ? ' has-error' : '' }}">
            <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="{{ $response['response']->nama_kegiatan }}">
            <label for="form_control_1">Nama Kegiatan: <small class="text-danger">{{ $errors->first('nama_kegiatan') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('anggaran') ? ' has-error' : '' }}">
            <input type="text" class="money form-control" id="anggaran" name="anggaran" value="{{ $response['response']->anggaran }}">
            <label for="form_control_1">Anggaran: <small class="text-danger">{{ $errors->first('anggaran') }}</small></label>
        </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('bidang') ? ' has-error' : '' }}">
            <input type="text" class="form-control edited" id="bidang" name="bidang" value="{{ $response['response']->bidang }}" readonly>
            <label for="form_control_1">Bidang: <small class="text-danger">{{ $errors->first('bidang') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('kode_rekening_program') ? ' has-error' : '' }}">
            <input type="text" class="form-control edited" id="kode_rekening_program" name="kode_rekening_program" value="{{ $response['response']->kode_rekening_program }}" readonly>
            <label for="form_control_1">Kode Rekening Program: <small class="text-danger">{{ $errors->first('kode_rekening_program') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('created_at') ? ' has-error' : '' }}">
            <input type="hidden" class="form-control" id="created_at" name="created_at" value="{{ $response['response']->created_at }}">
            <input type="text" class="form-control edited" id="created_at" name="" value="{{ $response['response']->created_at ? Carbon\Carbon::createFromTimeStamp($response['response']->created_at)->format('d M Y') : '' }}" disabled>
            <label for="form_control_1">Dibuat Pada Tanggal: <small class="text-danger">{{ $errors->first('created_at') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('updated_at') ? ' has-error' : '' }}">
            <input type="hidden" class="form-control" id="updated_at" name="updated_at" value="{{ $response['response']->updated_at }}">
            <input type="text" class="form-control edited" id="updated_at" name="" value="{{ $response['response']->updated_at ? Carbon\Carbon::createFromTimeStamp($response['response']->updated_at)->format('d M Y') : 'belum pernah di perbarui' }}" disabled>
            <label for="form_control_1">Diperbarui Pada Tanggal: <small class="text-danger">{{ $errors->first('updated_at') }}</small></label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="clearfix"></div><hr>
        <a type="button" href="{{ route('kegiatan.index') }}" class="btn btn-warning" style="margin-right:30px;">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
