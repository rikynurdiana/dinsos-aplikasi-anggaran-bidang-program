<?php

namespace App\Http\Models\Lkpj;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException as Exception;
use DB;
use Session;

class LkpjModel extends Model
{
    protected $table = 'lkpj';

    protected $fillable = [
        'bidang',
        'kode_rekening_program',
        'nama_program',
        'kode_rekening_kegiatan',
        'nama_kegiatan',
        'anggaran',
        'realisasi',
        'persentase',
        'hasil_kegiatan',
        'created_at',
        'updated_at',
    ];

    public static function createNewLkpj($request)
    {
        try {
            DB::beginTransaction();
            DB::table('lkpj')->insert($request);
            DB::commit();
            return true; // succes
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('message', $e->errorInfo[2]);
            return false; // failed
        }
    }

    public static function getListLkpj()
    {
        $response = DB::table('lkpj')
        ->orderBy('id', 'desc')
        ->select('*')
        ->paginate(10);

        return $response;
    }

    public static function getAllLkpj()
    {
        $response = DB::table('lkpj')
        ->get();

        return $response;
    }

    public static function getBidang()
    {
        $response = DB::table('lkpj')
        ->groupBy('bidang')
        ->get();

        return $response;
    }

    public static function getProgramByBidang($request)
    {
        $response = DB::table('lkpj')
        ->select('nama_program')
        ->groupBy('kode_rekening_program')
        ->where('bidang', $request)
        ->get();

        return $response;
    }

    public static function getProgram()
    {
        $response = DB::table('lkpj')
        ->select('nama_program', 'bidang')
        ->groupBy('kode_rekening_program')
        ->get();

        return $response;
    }

    public static function getKegiatanByProgram($program)
    {
        $response = DB::table('lkpj')
        ->select('nama_kegiatan','anggaran','realisasi','persentase','hasil_kegiatan')
        ->where('nama_program', $program)
        ->get();

        return $response;
    }

    public static function getKegiatanByBidangByProgram($bidang, $program)
    {
        $response = DB::table('lkpj')
        ->select('nama_kegiatan','anggaran','realisasi','persentase','hasil_kegiatan')
        ->where('bidang', $bidang)
        ->where('nama_program', $program)
        ->get();

        return $response;
    }

    public static function getLkpjById($id)
    {
        $response = DB::table('lkpj')
        ->select('*')
        ->where('id',$id)
        ->first();

        return $response;
    }

    public static function updateLkpjById($request, $id)
    {
        try {
            DB::beginTransaction();
            DB::table('lkpj')
                ->where('id', $id)
                ->update($request);
            DB::commit();
            return true; // succes
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('message', $e->errorInfo[2]);
            return false; // failed
        }
    }

    public static function destroyLkpjById($id)
    {
        try {
            DB::beginTransaction();
            DB::table('lkpj')->where('id', $id)->delete();
            DB::commit();
            return true; // succes
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('message', $e->errorInfo[2]);
            return false; // failed
        }
    }

    public static function searchLkpj($request)
    {
        $response = DB::table('lkpj')
        ->where('bidang', 'like', '%'.$request.'%')
        ->orWhere('kode_rekening_program', 'like', '%'.$request.'%')
        ->orWhere('nama_program', 'like', '%'.$request.'%')
        ->orWhere('kode_rekening_kegiatan', 'like', '%'.$request.'%')
        ->orWhere('nama_kegiatan', 'like', '%'.$request.'%')
        ->orWhere('anggaran', 'like', '%'.$request.'%')
        ->orWhere('realisasi', 'like', '%'.$request.'%')
        ->orWhere('persentase', 'like', '%'.$request.'%')
        ->get();

        return $response;
    }

    public static function getLkpjByProgram($request)
    {
        $response = DB::table('lkpj')
            ->select('*')
            ->where('kode_rekening_program', '=' , $request)
            ->get();

        return $response;
    }



    public static function anggaranB1($b1)
    {
        $anggaranB1 = DB::table('lkpj')
            ->select(DB::raw('SUM(anggaran) as anggaran'))
            ->where('bidang',$b1)
            ->get();

        return $anggaranB1;
    }

    public static function anggaranB2($b2)
    {
        $anggaranB2 = DB::table('lkpj')
            ->select(DB::raw('SUM(anggaran) as anggaran'))
            ->where('bidang',$b2)
            ->get();

        return $anggaranB2;
    }

    public static function anggaranB3($b3)
    {
        $anggaranB3 = DB::table('lkpj')
            ->select(DB::raw('SUM(anggaran) as anggaran'))
            ->where('bidang',$b3)
            ->get();

        return $anggaranB3;
    }

    public static function anggaranB4($b4)
    {
        $anggaranB4 = DB::table('lkpj')
            ->select(DB::raw('SUM(anggaran) as anggaran'))
            ->where('bidang',$b4)
            ->get();

        return $anggaranB4;
    }

    public static function realisasiB1($b1)
    {
        $realisasiB1 = DB::table('lkpj')
            ->select(DB::raw('SUM(realisasi) as realisasi'))
            ->where('bidang',$b1)
            ->get();

        return $realisasiB1;
    }

    public static function realisasiB2($b2)
    {
        $realisasiB2 = DB::table('lkpj')
            ->select(DB::raw('SUM(realisasi) as realisasi'))
            ->where('bidang',$b2)
            ->get();

        return $realisasiB2;
    }

    public static function realisasiB3($b3)
    {
        $realisasiB3 = DB::table('lkpj')
            ->select(DB::raw('SUM(realisasi) as realisasi'))
            ->where('bidang',$b3)
            ->get();

        return $realisasiB3;
    }

    public static function realisasiB4($b4)
    {
        $realisasiB4 = DB::table('lkpj')
            ->select(DB::raw('SUM(realisasi) as realisasi'))
            ->where('bidang',$b4)
            ->get();

        return $realisasiB4;
    }

}
