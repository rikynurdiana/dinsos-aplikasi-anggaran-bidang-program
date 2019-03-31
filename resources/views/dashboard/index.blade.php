@extends('layouts.app')

@section('plugin-style')
    <link href="{{ env('app_url') }}/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
@endsection

@section('custom-style')
@endsection

@section('plugin-script')
    <script src="{{ env('app_url') }}/assets/global/plugins/moment.min.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
    <script src="{{ env('app_url') }}/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
@endsection

@section('custom-script')
    <script>
        var dataKategori = [
            @if (isset($dataKategori))
                @if (!empty($dataKategori))
                    @foreach ($dataKategori as $key => $val)
                        {
                            kategori: '{{ $val->kategori }}', data: {{ $val->jumlah_orang }}, proyeksi: {{ $val->jumlah_orang / 2 }}
                        } @if (count($dataKategori)-1 != $key) , @endif
                    @endforeach
                @endif
            @endif
        ];

        var anggaranRealisasi = [
        {
            y: "bidang rehabilitasi sosial", a: {{ $anggaranB1[0]->anggaran ? $anggaranB1[0]->anggaran : 0 }}, b: {{ $realisasiB1[0]->realisasi  ? $realisasiB1[0]->realisasi  : 0 }}
        } ,
        {
            y: "bidang perlindungan dan jaminan sosial", a: {{ $anggaranB2[0]->anggaran ? $anggaranB2[0]->anggaran : 0 }}, b: {{ $realisasiB2[0]->realisasi  ? $realisasiB2[0]->realisasi  : 0 }}
        } ,
        {
            y: "bidang pemberdayaan sosial", a: {{ $anggaranB3[0]->anggaran ? $anggaranB3[0]->anggaran : 0 }}, b: {{ $realisasiB3[0]->realisasi  ? $realisasiB3[0]->realisasi  : 0 }}
        } ,
        {
            y: "bidang sekertariat", a: {{ $anggaranB4[0]->anggaran ? $anggaranB4[0]->anggaran : 0 }}, b: {{ $realisasiB4[0]->realisasi  ? $realisasiB4[0]->realisasi  : 0 }}
        }
        ];

        var totalTahun2019 = {{ $pmksperTahun->total }}
    </script>


    {{-- <script src="{{ env('app_url') }}/assets/pages/scripts/charts-morris.min.js" type="text/javascript"></script> --}}
    <script src="{{ env('app_url') }}/js/page/dashboard.js" type="text/javascript"></script>
@endsection

@section('tab-title')
    <title>Dashboard | DINSOS KBB</title>
@endsection

@section('page-content')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 bordered">
                <div class="display">
                    <div class="number">
                        <h3 class="font-green-sharp">
                            <span data-counter="counterup" data-value="{{  $totalProgram  }}">{{  $totalProgram  }}</span>
                            <small class="font-green-sharp"></small>
                        </h3>
                        <small>TOTAL PROGRAM</small>
                    </div>
                    <div class="icon">
                        <i class="icon-docs"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                        <span style="width: 100%;" class="progress-bar progress-bar-success green-sharp">
                            <span class="sr-only">76% progress</span>
                        </span>
                    </div>
                    {{-- <div class="status">
                        <div class="status-title"> progress </div>
                        <div class="status-number"> 76% </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 bordered">
                <div class="display">
                    <div class="number">
                        <h3 class="font-red-haze">
                            <span data-counter="counterup" data-value="{{  $totalKegiatan  }}">{{  $totalKegiatan  }}</span>
                        </h3>
                        <small>TOTAL KEGIATAN</small>
                    </div>
                    <div class="icon">
                        <i class="icon-layers"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                        <span style="width: 100%;" class="progress-bar progress-bar-success red-haze">
                            <span class="sr-only">85% progress</span>
                        </span>
                    </div>
                    {{-- <div class="status">
                        <div class="status-title"> progress </div>
                        <div class="status-number"> 85% </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 bordered">
                <div class="display">
                    <div class="number">
                        <h3 class="font-blue-sharp">
                            <span data-counter="counterup" data-value="{{  $totalKategori  }}">{{  $totalKategori  }}</span>
                        </h3>
                        <small>TOTAL KATEGORI PMKS</small>
                    </div>
                    <div class="icon">
                        <i class="icon-users"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                        <span style="width: 100%;" class="progress-bar progress-bar-success blue-sharp">
                            <span class="sr-only">100% aktif</span>
                        </span>
                    </div>
                    {{-- <div class="status">
                        <div class="status-title"> aktif </div>
                        <div class="status-number"> 100% </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="dashboard-stat2 bordered">
                <div class="display">
                    <div class="number">
                        <h3 class="font-purple-soft">
                            <span data-counter="counterup" data-value="{{  $totalMember  }}">{{  $totalMember  }}</span>
                        </h3>
                        <small>TOTAL PENGGUNA</small>
                    </div>
                    <div class="icon">
                        <i class="icon-user"></i>
                    </div>
                </div>
                <div class="progress-info">
                    <div class="progress">
                        <span style="width: 100%;" class="progress-bar progress-bar-success purple-soft">
                            <span class="sr-only">100% Aktif</span>
                        </span>
                    </div>
                    {{-- <div class="status">
                        <div class="status-title"> Aktif </div>
                        <div class="status-number"> 100% </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption ">
                        <span class="caption-subject bold uppercase font-green-haze">DATA PMKS PER TAHUN</span>
                        <span class="caption-helper">Dinas Sosial Kabupaten Bandung Barat</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="dashboard_amchart_3" class="CSSAnimationChart"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject bold uppercase font-green-haze">DATA PMKS PER KATEGORI</span>
                        <span class="caption-helper">TAHUN 2018</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="chart_4" class="chart" style="height: 1000px;"> </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject bold uppercase font-green-haze">ANGGARAN DAN REALISASI PER BIDANG</span>
                        <span class="caption-helper">TAHUN 2018</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="morris_chart_3" style="height:500px;"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
