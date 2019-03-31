@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    <hr>
@endif
<div class="hidden">
    {{ $a = 1 }}
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="50px" class="text-center">NO</th>
                    @if (session('user.bidang') == 'admin')
                        <th>BIDANG</th>
                    @endif
                    <th>IKK</th>
                    <th>ELEMEN DATA</th>
                    <th>DOKUMEN PENDUKUNG</th>
                    <th colspan="2" class="text-center">KETERAGAN</th>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($response as $key => $data)
                    @if ($data->bidang == session('user.bidang'))
                        {!! Form::open(array('route' => 'lppd.store','method'=>'POST', 'enctype' => 'multipart/form-data', 'files' => 'true')) !!}
                        <tr>
                            <td class="text-center">{{ $a++ }}</td>
                            <td>{{ $data->ikk }}</td>
                            <td>{{ $data->elemen_data }}</td>
                            <td>{{ $data->dok_pendukung }}</td>
                            <td width="150px">
                                <div class="form-group">
                                    <select class="form-control" name="option">
                                        <option {{ $data->keterangan == '' ? 'selected' : '' }} value="">pilih</option>
                                        <option {{ $data->keterangan == 'ada' ? 'selected' : '' }} value="ada">ada</option>
                                        <option {{ $data->keterangan == 'tidak' ? 'selected' : '' }} value="tidak">tidak</option>
                                    </select>
                                </div>
                            </td>
                            <td width="130px" class="text-center">
                                @if (!empty($data->dokumen))
                                    <a href="{{ env('APP_URL') }}/{{ $data->dokumen }}"> <i class="fa fa-file"></i> download </a><hr style="margin-top:5px; margin-bottom:5px">
                                    <input type="file" name="file" class="btn btn-success" style="width:220px">
                                    <input class="hidden" type="text" name="original" value="{{ $data->dokumen }}">
                                @else
                                    <input type="file" name="file" class="btn btn-danger" style="width:220px">
                                @endif
                            </td>
                            <input class="hidden" type="text" name="id" value="{{ $data->id }}">
                            <td class="text-center">{!! Form::submit('Simpan', ['class' => 'btn btn-info']) !!}</td>
                        </tr>
                        {!! Form::close() !!}
                    @elseif (session('user.bidang') == 'admin')
                        {!! Form::open(array('route' => 'lppd.store','method'=>'POST', 'enctype' => 'multipart/form-data', 'files' => 'true')) !!}
                        <tr>
                            <td class="text-center">{{ $a++ }}</td>
                            <td>{{ $data->bidang }}</td>
                            <td>{{ $data->ikk }}</td>
                            <td>{{ $data->elemen_data }}</td>
                            <td>{{ $data->dok_pendukung }}</td>
                            <td width="150px">
                                <div class="form-group">
                                    <select class="form-control" name="option">
                                        <option {{ $data->keterangan == '' ? 'selected' : '' }} value="">pilih</option>
                                        <option {{ $data->keterangan == 'ada' ? 'selected' : '' }} value="ada">ada</option>
                                        <option {{ $data->keterangan == 'tidak' ? 'selected' : '' }} value="tidak">tidak</option>
                                    </select>
                                </div>
                            </td>
                            <td width="130px" class="text-center">
                                @if (!empty($data->dokumen))
                                    <a href="{{ env('APP_URL') }}/{{ $data->dokumen }}"> <i class="fa fa-file"></i> download </a><hr style="margin-top:5px; margin-bottom:5px">
                                    <input type="file" name="file" class="btn btn-success" style="width:220px">
                                    <input class="hidden" type="text" name="original" value="{{ $data->dokumen }}">
                                @else
                                    <input type="file" name="file" class="btn btn-danger" style="width:220px">
                                @endif
                            </td>
                            <input class="hidden" type="text" name="id" value="{{ $data->id }}">
                            <td class="text-center">{!! Form::submit('Simpan', ['class' => 'btn btn-info']) !!}</td>
                        </tr>
                        {!! Form::close() !!}
                    @endif

                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="clearfix"></div><hr>
        <a type="button" href="{{ route('lppd.index') }}" class="btn btn-warning" style="margin-right:30px;">Batal</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
