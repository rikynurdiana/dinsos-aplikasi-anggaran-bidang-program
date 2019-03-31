<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('bidang') ? ' has-error' : '' }}">
            <select class="form-control" id="bidang" name="bidang" required>
                <option value="{{ $masters['bidang'] }}">{{ $masters['bidang'] }}</option>
                <option value="bidang rehabilitasi sosial">bidang rehabilitasi sosial</option>
                <option value="bidang perlindungan dan jaminan sosial">bidang perlindungan dan jaminan sosial</option>
                <option value="bidang pemberdayaan sosial">bidang pemberdayaan sosial</option>
                <option value="sekertariat">sekertariat</option>
            </select>
            <label for="form_control_1">Bidang: <small class="text-danger">{{ $errors->first('bidang') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('kategori') ? ' has-error' : '' }}">
            <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $masters['kategori'] }}" required>
            <label for="form_control_1">Jenis PMKS: <small class="text-danger">{{ $errors->first('kategori') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
            <textarea class="form-control" rows="2" id="deskripsi" name="deskripsi" value="{{ $masters['deskripsi'] }}" required>{{ $masters['deskripsi'] }}</textarea>
            <label for="form_control_1">Deskripsi: <small class="text-danger">{{ $errors->first('deskripsi') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('jumlah_orang') ? ' has-error' : '' }}">
            <input type="number" class="form-control" id="jumlah_orang" name="jumlah_orang" value="{{ $masters['jumlah_orang'] }}" required>
            <label for="form_control_1">Jumlah Keseluruhan Orang: <small class="text-danger">{{ $errors->first('jumlah_orang') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('sudah_ditangani') ? ' has-error' : '' }}">
            <input type="number" class="form-control" id="sudah_ditangani" name="sudah_ditangani" value="{{ $masters['sudah_ditangani'] }}" required>
            <label for="form_control_1">Sudan Ditangani: <small class="text-danger">{{ $errors->first('sudah_ditangani') }}</small></label>
        </div>

        <div class="form-group form-md-line-input form-md-floating-label {{ $errors->has('belum_ditangani') ? ' has-error' : '' }}">
            <input type="number" class="form-control" id="belum_ditangani" name="belum_ditangani" value="{{ $masters['belum_ditangani'] }}" required>
            <label for="form_control_1">Belum Ditangani: <small class="text-danger">{{ $errors->first('belum_ditangani') }}</small></label>
        </div>

        <div class="hidden form-group form-md-line-input form-md-floating-label {{ $errors->has('dibuat') ? ' has-error' : '' }}">
            <input type="text" class="form-control" id="dibuat" name="dibuat" value="{{ $masters['dibuat'] }}" required>
            <label for="form_control_1">Dibuat: <small class="text-danger">{{ $errors->first('dibuat') }}</small></label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="clearfix"></div><hr>
        <a type="button" href="{{ route('kategori-pmks.index') }}" class="btn btn-warning" style="margin-right:30px;">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
