<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PROGRAM DAN KEGIATAN SERTA REALISASI YANG DILAKSANAKAN DINAS SOSIAL</title>
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

        <div class="text-center" style="font-size: 14px;font-weight: bold; text-transform:uppercase">
            @if (session('user.bidang') == 'admin')
                PROGRAM DAN KEGIATAN SERTA REALISASI YANG DILAKSANAKAN <br> DINAS SOSIAL <br> TAHUN {{ Carbon\Carbon::now()->format('Y') }}
            @else
                PROGRAM DAN KEGIATAN SERTA REALISASI YANG DILAKSANAKAN <br> BIDANG {{ session('user.bidang') }} DINAS SOSIAL <br> TAHUN {{ Carbon\Carbon::now()->format('Y') }}
            @endif


        </div>

        <div class="clearfix"></div><br>

        <div class="hidden">
            {{ $i = 1 }}
            {{ $a = 1 }}
        </div>


        <div style="font-weight:bold; text-transform: uppercase;">
            @if (Session('user.bidang') == 'admin')
                PROGRAM KEGIATAN SELURUH BIDANG
            @else
                {{ session('user.bidang') }}
            @endif
        </div>
        <div style="font-weight:bold;">
            A.Program dan Kegiatan serta Realisasi yang Dilaksanakan Dinas Sosial adalah :
        </div>
        @if (Session('user.bidang') != 'admin')
            @forelse (\App\Http\Models\Lkpj\LkpjModel::getProgramByBidang(session('user.bidang')) as $key => $p)
                <div style="font-weight:bold; margin-left:20px;">
                    {{ $a++ }}) {{ $p->nama_program }} terdiri dari {{ count(\App\Http\Models\Lkpj\LkpjModel::getKegiatanByBidangByProgram(session('user.bidang'),$p->nama_program)) }} kegiatan, yaitu:
                </div>
                @forelse (\App\Http\Models\Lkpj\LkpjModel::getKegiatanByBidangByProgram(session('user.bidang'),$p->nama_program) as $key => $k)
                    <table style="margin-left:30px;" class="table">
                        <tr>
                            <td width="20px" colspan="0">{{ $key+1 }})</td>
                            <td>{{ $k->nama_kegiatan }} dengan alokasi anggaran sebesar Rp.{{ number_format($k->anggaran) }} dan ter realisasi sebesar Rp.{{ number_format($k->realisasi) }} atau {{ $k->persentase }} . {{ $k->hasil_kegiatan }}</td>
                        </tr>
                    </table>
                @empty
                    TIDAK ADA DATA YANG BISA DI CETAK
                @endforelse
            @empty
                TIDAK ADA DATA YANG BISA DI CETAK
            @endforelse
        @endif

        @if (Session('user.bidang') == 'admin')
            @forelse (\App\Http\Models\Lkpj\LkpjModel::getProgram() as $key => $p)
                <div style="font-weight:bold; margin-left:20px;">
                    <div style="font-weight:bold; text-transform:uppercase;">
                        {{ $p->bidang }}
                    </div>
                    {{ $a++ }}) {{ $p->nama_program }} terdiri dari {{ count(\App\Http\Models\Lkpj\LkpjModel::getKegiatanByProgram($p->nama_program)) }} kegiatan, yaitu:
                </div>
                @forelse (\App\Http\Models\Lkpj\LkpjModel::getKegiatanByProgram($p->nama_program) as $key => $k)
                    <table style="margin-left:30px;" class="table">
                        <tr>
                            <td width="20px" colspan="0">{{ $key+1 }})</td>
                            <td>{{ $k->nama_kegiatan }} dengan alokasi anggaran sebesar Rp.{{ number_format($k->anggaran) }} dan ter realisasi sebesar Rp.{{ number_format($k->realisasi) }} atau {{ $k->persentase }} . {{ $k->hasil_kegiatan }}</td>
                        </tr>
                    </table>
                @empty
                    TIDAK ADA DATA YANG BISA DI CETAK
                @endforelse
                <br>
            @empty
                TIDAK ADA DATA YANG BISA DI CETAK
            @endforelse
        @endif

        <script src="{{ env('APP_URL') }}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="{{ env('APP_URL') }}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
