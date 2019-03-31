<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Nama:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    @if (session('user.role') == 1 || session('user.role') == 2)
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Hak Akses:</strong>
                {{-- {!! Form::email('role', null, array('placeholder' => 'Role','class' => 'form-control')) !!} --}}
                <select class="form-control" name="role">
                    <option value="{{ $members['role'] }}">
                        @if ($members['role'] == '1')
                            Super Admin
                        @elseif ($members['role'] == '2')
                            Admin Pemda
                        @elseif ($members['role'] == '3')
                            Pelapor
                        @elseif ($members['role'] == '4')
                            Belum Di Aktifkan
                        @endif
                    </option>
                    <option value="4">Belum Di Aktifkan</option>
                    <option value="2">Admin Pemda</option>
                </select>
            </div>
        </div>
    @endif
    <div class="clearfix"></div>
    <div class="col-xs-6 col-sm-6 col-md-6">
        <a type="button" href="{{ route('member.index') }}" class="btn btn-warning" style="margin-right:30px;">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
