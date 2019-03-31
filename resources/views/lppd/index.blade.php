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
    <title>LPPD | DINSOS KBB</title>
@endsection


@section('page-content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green bold uppercase">LPPD</span>
            </div>
            <div class="actions">
                <div class="pull-right">
                    <a style="margin-left:20px" class="btn btn-info" href="{{ route('lppd.print') }}"><i class="fa fa-print"></i> Cetak</a>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('lppd.create') }}">LENGKAPI LPPD</a>
                </div>
            </div>
        </div>
        <div class="portlet-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="hidden">
                {{ $a = 1 }}
            </div>
            <table class="table table-bordered table-hover" id="myTable">
                <thead>
                    <tr style="background-color:#f3f3f3;">
                        <th width="50px" class="text-center">NO</th>
                        @if (session('user.bidang') == 'admin')
                            <th>BIDANG</th>
                        @endif
                        <th  class="text-center">IKK</th>
                        <th  class="text-center">ELEMEN DATA</th>
                        <th  class="text-center">DOKUMEN PENDUKUNG</th>
                        <th colspan="2" class="text-center">KETERAGAN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($response as $key => $d)
                        @if ($d->bidang == session('user.bidang'))
                            <tr>
                                <td class="text-center">{{ $a++ }}</td>
                                <td>{{ $d->ikk }}</td>
                                <td>{{ $d->elemen_data }}</td>
                                <td>{{ $d->dok_pendukung }}</td>
                                <td width="130px" class="text-center">
                                    @if ($d->keterangan == 'ada')
                                        Dokumen Lengkap
                                    @else
                                        Belum Dilengkapi
                                    @endif
                                </td>
                                <td width="110px" class="text-center">
                                    @if (!empty($d->dokumen))
                                        <a href="{{ env('APP_URL') }}/{{ $d->dokumen }}"> <i class="fa fa-file"></i> download </a>
                                    @else
                                        Belum Dilengkapi
                                    @endif
                                </td>
                            </tr>
                        @elseif (session('user.bidang') == 'admin')
                            <tr>
                                <td class="text-center">{{ $a++ }}</td>
                                <td>{{ $d->bidang }}</td>
                                <td>{{ $d->ikk }}</td>
                                <td>{{ $d->elemen_data }}</td>
                                <td>{{ $d->dok_pendukung }}</td>
                                <td width="130px" class="text-center">
                                    @if ($d->keterangan == 'ada')
                                        Dokumen Lengkap
                                    @else
                                        Belum Dilengkapi
                                    @endif
                                </td>
                                <td width="110px" class="text-center">
                                    @if (!empty($d->dokumen))
                                        <a href="{{ env('APP_URL') }}/{{ $d->dokumen }}"> <i class="fa fa-file"></i> download </a>
                                    @else
                                        Belum Dilengkapi
                                    @endif
                                </td>
                            </tr>
                        @endif


                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
