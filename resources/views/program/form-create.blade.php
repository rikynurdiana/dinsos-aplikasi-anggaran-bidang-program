<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('bidang') ? ' has-error' : '' }}">
            <select class="form-control" id="bidang" name="bidang" >
                <option value="{{ old('bidang') }}">{{ old('bidang') }}</option>
                <option value="bidang rehabilitasi sosial">bidang rehabilitasi sosial</option>
                <option value="bidang perlindungan dan jaminan sosial">bidang perlindungan dan jaminan sosial</option>
                <option value="bidang pemberdayaan sosial">bidang pemberdayaan sosial</option>
                <option value="sekertariat">sekertariat</option>
            </select>
            <label for="form_control_1">Bidang: <small class="text-danger">{{ $errors->first('bidang') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('kode_rekening_program') ? ' has-error' : '' }}">
            <input type="text" class="form-control" id="kode_rekening_program" name="kode_rekening_program" value="{{ old('kode_rekening_program') }}">
            <label for="form_control_1">Kode Rekening Program: <small class="text-danger">{{ $errors->first('kode_rekening_program') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('nama_program') ? ' has-error' : '' }}">
            <input type="text" class="form-control" id="nama_program" name="nama_program" value="{{ old('nama_program') }}">
            <label for="form_control_1">Nama Program: <small class="text-danger">{{ $errors->first('nama_program') }}</small></label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="clearfix"></div><hr>
        <a type="button" href="{{ route('program.index') }}" class="btn btn-warning" style="margin-right:30px;">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
