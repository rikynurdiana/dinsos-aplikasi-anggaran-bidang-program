<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PROGRAM KEGIATAN DINAS SOSIAL</title>
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
        @page {
            margin-left: 1.5em;
            margin-right: 1.5em;
        }
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
                PROGRAM KEGIATAN DINAS SOSIAL TAHUN {{ Carbon\Carbon::now()->format('Y') }}
            @else
                PROGRAM KEGIATAN BIDANG {{ session('user.bidang') }} DINAS SOSIAL TAHUN {{ Carbon\Carbon::now()->format('Y') }}
            @endif
        </div>

        <div class="clearfix"></div><br>

        <table class="table table-bordered table-hover" id="myTable" style="font-size:9px">
            <thead>
                <tr style="background-color:#f3f3f3;">
                    <th onclick="sortTable(0)" width="20px" class="text-center">No</th>
                    <th width="210px">Bidang</th>
                    <th width="110px">Kode Rekening Program</th>
                    <th>Nama Program</th>
                    <th width="110px">Kode Rekening Kegiatan</th>
                    <th>Nama Kegiatan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($response as $d)
                    @if ($d->bidang == session('user.bidang'))
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td>{{ $d->bidang }}</td>
                            <td>{{ $d->kode_rekening_program }}</td>
                            <td>{{ $d->nama_program }}</td>
                            <td>{{ $d->kode_rekening_kegiatan }}</td>
                            <td>{{ $d->nama_kegiatan }}</td>
                        </tr>
                    @endif
                @empty
                    <tr>
                        <td colspan="4" class="text-center bold">Tidak Ada Data Ditemukan</td>
                    </tr>
                @endforelse

                @if (session('user.bidang') == 'admin')
                    @forelse ($response as $d)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td>{{ $d->bidang }}</td>
                            <td>{{ $d->kode_rekening_program }}</td>
                            <td>{{ $d->nama_program }}</td>
                            <td>{{ $d->kode_rekening_kegiatan }}</td>
                            <td>{{ $d->nama_kegiatan }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center bold">Tidak Ada Data Ditemukan</td>
                        </tr>
                    @endforelse
                @endif
            </tbody>
        </table>

        <script src="{{ env('APP_URL') }}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="{{ env('APP_URL') }}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
