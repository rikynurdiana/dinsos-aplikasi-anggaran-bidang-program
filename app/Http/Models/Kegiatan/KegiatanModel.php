<?php

namespace App\Http\Models\Kegiatan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException as Exception;
use DB;
use Session;

class KegiatanModel extends Model
{
    protected $table = 'master_kegiatan';

    protected $fillable = [
        'bidang',
        'kode_rekening_program',
        'nama_program',
        'kode_rekening_kegiatan',
        'nama_kegiatan',
        'anggaran',
        'created_at',
        'updated_at',
    ];

    public static function createNewKegiatan($request)
    {
        try {
            DB::beginTransaction();
            DB::table('master_kegiatan')->insert($request);
            DB::commit();
            return true; // succes
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('message', $e->errorInfo[2]);
            return false; // failed
        }
    }

    public static function getListKegiatan()
    {
        $response = DB::table('master_kegiatan')
        ->orderBy('id', 'desc')
        ->select('*')
        ->paginate(10);

        return $response;
    }

    public static function getKegiatanById($id)
    {
        $response = DB::table('master_kegiatan')
        ->select('*')
        ->where('id',$id)
        ->first();

        return $response;
    }

    public static function updateKegiatanById($request, $id)
    {
        try {
            DB::beginTransaction();
            DB::table('master_kegiatan')
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

    public static function destroyKegiatanById($id)
    {
        try {
            DB::beginTransaction();
            DB::table('master_kegiatan')->where('id', $id)->delete();
            DB::commit();
            return true; // succes
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('message', $e->errorInfo[2]);
            return false; // failed
        }
    }

    public static function searchKegiatan($request)
    {
        $response = DB::table('master_kegiatan')
        ->where('bidang', 'like', '%'.$request.'%')
        ->orWhere('kode_rekening_program', 'like', '%'.$request.'%')
        ->orWhere('nama_program', 'like', '%'.$request.'%')
        ->orWhere('kode_rekening_kegiatan', 'like', '%'.$request.'%')
        ->orWhere('nama_kegiatan', 'like', '%'.$request.'%')
        ->get();

        return $response;
    }

    public static function getKegiatanByProgram($request)
    {
        $response = DB::table('master_kegiatan')
            ->select('*')
            ->where('kode_rekening_program', '=' , $request)
            ->get();

        return $response;
    }

    public static function countKegiatan()
    {
        $response = DB::table('master_kegiatan')
            ->count();

        return $response;
    }
}
