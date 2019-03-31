<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Program\ProgramModel as Program;
use App\Http\Models\Kegiatan\KegiatanModel as Kegiatan;
use App\Http\Models\Kategori\KategoriModel as Kategori;
use App\Http\Models\Member\MemberModel as Member;
use App\Http\Models\Lkpj\LkpjModel as Lkpj;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b1 = 'bidang rehabilitasi sosial';
        $b2 = 'bidang perlindungan dan jaminan sosial';
        $b3 = 'bidang pemberdayaan sosial';
        $b4 = 'sekertariat';

        $anggaranB1 = Lkpj::anggaranB1($b1);
        $anggaranB2 = Lkpj::anggaranB2($b2);
        $anggaranB3 = Lkpj::anggaranB3($b3);
        $anggaranB4 = Lkpj::anggaranB4($b4);

        $realisasiB1 = Lkpj::realisasiB1($b1);
        $realisasiB2 = Lkpj::realisasiB2($b2);
        $realisasiB3 = Lkpj::realisasiB3($b3);
        $realisasiB4 = Lkpj::realisasiB4($b4);

        $totalProgram  = Program::countProgram();
        $totalKegiatan = Kegiatan::countKegiatan();
        $totalKategori = Kategori::countKategori();
        $totalMember   = Member::countMember();
        $dataKategori  = Kategori::getDataKategori();
        $PmksPerTahun  = Kategori::countJumahOrang();

        $response = array(
            'totalProgram'  => $totalProgram,
            'totalKegiatan' => $totalKegiatan,
            'totalKategori' => $totalKategori,
            'totalMember'   => $totalMember,
            'dataKategori'  => $dataKategori,
            'pmksperTahun'  => $PmksPerTahun,
            'anggaranB1'    => $anggaranB1,
            'anggaranB2'    => $anggaranB2,
            'anggaranB3'    => $anggaranB3,
            'anggaranB4'    => $anggaranB4,
            'realisasiB1'   => $realisasiB1,
            'realisasiB2'   => $realisasiB2,
            'realisasiB3'   => $realisasiB3,
            'realisasiB4'   => $realisasiB4,
        );

        \Debugbar::info($response);

        return view('dashboard.index', $response);
    }
}
