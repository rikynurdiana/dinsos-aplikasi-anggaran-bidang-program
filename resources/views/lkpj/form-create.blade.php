<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('nama_program') ? ' has-error' : '' }}">
            <select class="form-control" id="nama_program" name="nama_program">
                <option value="{{ old('nama_program') }}">{{ old('nama_program') }}</option>
                @foreach ($program as $key => $p)
                    <option  data-bidang="{{ $p->bidang }}" data-kode="{{ $p->kode_rekening_program }}" value="{{ $p->nama_program }}">{{ $p->nama_program }}</option>
                @endforeach
            </select>
            <label for="form_control_1">Program: <small class="text-danger">{{ $errors->first('nama_program') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('nama_kegiatan') ? ' has-error' : '' }}">
            <select class="form-control edited" id="nama_kegiatan" name="nama_kegiatan">
                <option value=""></option>
            </select>
            <label for="form_control_1">Kegiatan: <small class="text-danger">{{ $errors->first('nama_kegiatan') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label has-success{{ $errors->has('anggaran') ? ' has-error' : '' }}">
            <input type="text" class="money form-control edited" id="anggaran" name="anggaran" value="" readonly>
            <label for="form_control_1">Anggaran: <small class="text-danger">{{ $errors->first('anggaran') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('realisasi') ? ' has-error' : '' }}">
            <input type="text" class="money form-control" id="realisasi" name="realisasi" value="">
            <label for="form_control_1">Realisasi: <small class="text-danger">{{ $errors->first('realisasi') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('persentase') ? ' has-error' : '' }}">
            <input type="text" class="form-control" id="persentase" name="persentase" value="{{ old('persentase') }}" readonly>
            <label for="form_control_1">Persentase: <small class="text-danger">{{ $errors->first('persentase') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('hasil_kegiatan') ? ' has-error' : '' }}">
            <textarea class="form-control" rows="5" id="hasil_kegiatan" name="hasil_kegiatan"></textarea>
            <label for="form_control_1">Hasil Kegiatan: <small class="text-danger">{{ $errors->first('hasil_kegiatan') }}</small></label>
        </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('bidang') ? ' has-error' : '' }}">
            <input type="text" class="form-control edited" id="bidang" name="bidang" value="{{ old('bidang') }}" readonly>
            <label for="form_control_1">Bidang: <small class="text-danger">{{ $errors->first('bidang') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('kode_rekening_program') ? ' has-error' : '' }}">
            <input type="text" class="form-control edited" id="kode_rekening_program" name="kode_rekening_program" value="{{ old('kode_rekening_program') }}" readonly>
            <label for="form_control_1">Kode Rekening Program: <small class="text-danger">{{ $errors->first('kode_rekening_program') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label has-success {{ $errors->has('kode_rekening_kegiatan') ? ' has-error' : '' }}">
            <input type="text" class="form-control edited" id="kode_rekening_kegiatan" name="kode_rekening_kegiatan" value="{{ old('kode_rekening_kegiatan') }}" readonly>
            <label for="form_control_1">Kode Rekening Kegiatan: <small class="text-danger">{{ $errors->first('kode_rekening_kegiatan') }}</small></label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="clearfix"></div><hr>
        <a type="button" href="{{ route('lkpj.index') }}" class="btn btn-warning" style="margin-right:30px;">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
