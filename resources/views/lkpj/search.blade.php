@extends('layouts.app')

@section('plugin-style')
@endsection

@section('custom-style')
    <style>
        th {
            cursor: pointer;
        }
    </style>
@endsection

@section('plugin-script')
@endsection

@section('custom-script')
    <script src="{{ env('APP_URL') }}/js/page/sorting-bootstrap-table.js" type="text/javascript"></script>
@endsection

@section('tab-title')
    <title>LKPJ | DINSOS KBB</title>
@endsection


@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">LKPJ</span>
            </div>
            <div class="actions" style="margin-top:-40px">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('lkpj.create') }}">INPUT LKPJ</a>
                </div>
                <div class="col-lg-2 pull-right" style="margin-right:20px;">
                    <form class="" action="{{ route('lkpj.search') }}" method="post">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="search">
                            <span class="input-group-btn">
                                <button class="btn blue" type="submit"><i class="icon-magnifier"></i> </button>
                            </span>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
        <div class="portlet-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered table-hover" id="myTable">
                <thead>
                    <tr style="background-color:#f3f3f3;">
                        <th onclick="sortTable(0)" width="50px" class="text-center">No</th>
                        <th onclick="sortTable(1)">Bidang</th>
                        <th onclick="sortTable(3)">Nama Program</th>
                        <th onclick="sortTable(5)">Nama Kegiatan</th>
                        <th width="250px" onclick="sortTable(5)" class="text-center">Anggaran</th>
                        <th width="250px" onclick="sortTable(5)" class="text-center">Realisasi</th>
                        <th width="100px" onclick="sortTable(5)" class="text-center">Persentase</th>
                        <th width="120px" class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($response as $d)
                        @if ($d->bidang == session('user.bidang'))
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>{{ $d->bidang }}</td>
                                <td>{{ $d->nama_program }}</td>
                                <td>{{ $d->nama_kegiatan }}</td>
                                <td>
                                    <div class="col-lg-2 text-left">
                                        Rp
                                    </div>
                                    <div class="col-lg-10 text-right">
                                        {{ number_format($d->anggaran) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="col-lg-2 text-left">
                                        Rp
                                    </div>
                                    <div class="col-lg-10 text-right">
                                        {{ number_format($d->realisasi) }}
                                    </div>
                                </td>
                                <td class="text-right">{{ $d->persentase }}</td>
                                <td class="text-center">
                                    <a class="btn btn-xs btn-success" href="{{ env('APP_URL') }}/lkpj/show/{{ $d->id }}"><i class="icon-eye"></i> </a>
                                    <a class="btn btn-xs  btn-primary" href="{{ env('APP_URL') }}/lkpj/edit/{{ $d->id }}"><i class="icon-pencil"></i> </a>
                                    {!! Form::open(['method' => 'POST', 'route' => ['lkpj.destroy', $d->id],'style'=>'display:inline', 'onsubmit' => 'return confirm("Anda yakin akan menghapus data ini?");']) !!}
                                    <button type="submit" class="btn btn-xs btn-danger"><i class="icon-trash"></i> </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endif
                    @empty
                        <tr>
                            <td colspan="7" class="text-center bold">Tidak Ada Data Ditemukan</td>
                        </tr>
                    @endforelse

                    @if (session('user.bidang') == 'admin')
                        @forelse ($response as $d)
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>{{ $d->bidang }}</td>
                                <td>{{ $d->nama_program }}</td>
                                <td>{{ $d->nama_kegiatan }}</td>
                                <td>
                                    <div class="col-lg-2 text-left">
                                        Rp
                                    </div>
                                    <div class="col-lg-10 text-right">
                                        {{ number_format($d->anggaran) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="col-lg-2 text-left">
                                        Rp
                                    </div>
                                    <div class="col-lg-10 text-right">
                                        {{ number_format($d->realisasi) }}
                                    </div>
                                </td>
                                <td class="text-right">{{ $d->persentase }}</td>
                                <td class="text-center">
                                    <a class="btn btn-xs btn-success" href="{{ env('APP_URL') }}/lkpj/show/{{ $d->id }}"><i class="icon-eye"></i> </a>
                                    <a class="btn btn-xs  btn-primary" href="{{ env('APP_URL') }}/lkpj/edit/{{ $d->id }}"><i class="icon-pencil"></i> </a>
                                    {!! Form::open(['method' => 'POST', 'route' => ['lkpj.destroy', $d->id],'style'=>'display:inline', 'onsubmit' => 'return confirm("Anda yakin akan menghapus data ini?");']) !!}
                                    <button type="submit" class="btn btn-xs btn-danger"><i class="icon-trash"></i> </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center bold">Tidak Ada Data Ditemukan</td>
                            </tr>
                        @endforelse
                    @endif
                </tbody>
            </table>
            {{-- {!! $response->render() !!} --}}
        </div>
    </div>


@endsection
