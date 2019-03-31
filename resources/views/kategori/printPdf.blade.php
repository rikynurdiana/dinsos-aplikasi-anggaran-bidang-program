<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Kategori PMKS</title>
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
        </style>
    </head>
    <body>
        <div class="footer">
            Halaman <span class="pagenum"></span> <br> <small style="font-size:10px; font-style:italic;">di cetak oleh aplikasi penyusunan laporan | dinas sosial</small>
        </div>


        <div class="hidden">
            {{ $i = 0 }}
        </div>

        <div class="container">
            <div class="col-lg-12">
                <div class="text-center" style="font-size: 14px;font-weight: bold;">
                    REKAPITULASI DATA PMKS KABUPATEN BANDUNG BARAT <br>
                    TAHUN {{ Carbon\Carbon::now()->format('Y') }}
                </div>

                <div class="clearfix"></div><br>

                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr style="background-color:#f3f3f3;">
                            <th onclick="sortTable(0)" width="50px" class="text-center">No</th>
                            <th onclick="sortTable(1)">Jenis PMKS</th>
                            <th width="100px" onclick="sortTable(4)" class="text-center">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($masters as $master)
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>{{ $master->kategori }}</td>
                                <td class="text-right">
                                    {{ $master->jumlah_orang ? number_format($master->jumlah_orang) : 0 }} Orang
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <script src="{{ env('APP_URL') }}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="{{ env('APP_URL') }}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
