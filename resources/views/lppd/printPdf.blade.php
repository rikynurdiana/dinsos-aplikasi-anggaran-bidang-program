<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>LAPORAN LPPD</title>
        <link href="{{ env('APP_URL') }}/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <style media="screen">
        .footer {
            width: 100%;
            text-align: center;
            position: fixed;
            }
            .footer {
            bottom: 0px;
            }
            .pagenum:before {
            content: counter(page);
        }
        .table {
            width: 100%;
            margin-bottom: 0px;
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            padding: 8px;
            line-height: 1.42857;
            vertical-align: top;
            border-top: 1px solid #ffffff;
        }
        /* @page {
            margin-left: 1.5em;
            margin-right: 1.5em;
        } */
        </style>
    </head>
    <body>
        <div class="footer">
            Halaman <span class="pagenum"></span> <br> <small style="font-size:10px; font-style:italic;">di cetak oleh aplikasi penyusunan laporan | dinas sosial</small>
        </div>

        <div class="hidden">
            {{ $i = 0 }}
        </div>

        <div class="text-center" style="font-size: 14px;font-weight: bold; text-transform: uppercase;">
            @if (session('user.bidang') == 'admin')
                LAPORAN LPPD <br> DINAS SOSIAL <br> TAHUN {{ Carbon\Carbon::now()->format('Y') }}
            @else
                LAPORAN LPPD BIDANG {{ session('user.bidang') }}<br> DINAS SOSIAL <br> TAHUN {{ Carbon\Carbon::now()->format('Y') }}
            @endif
        </div>

        <div class="clearfix"></div><br>

        <div class="hidden">
            {{ $i = 1 }}
            {{ $a = 1 }}
        </div>

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
                    <th  class="text-center">KETERAGAN</th>
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
                        </tr>
                    @endif


                @endforeach
            </tbody>
        </table>

        <script src="{{ env('APP_URL') }}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="{{ env('APP_URL') }}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
