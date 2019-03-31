<?php

namespace App\Http\Models\Program;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException as Exception;
use DB;
use Session;

class ProgramModel extends Model
{
    protected $table = 'master_program';

    protected $fillable = [
        'bidang',
        'kode_rekening_program',
        'nama_program',
        'created_at',
        'updated_at',
    ];

    public static function createNewProgram($request)
    {
        try {
            DB::beginTransaction();
            DB::table('master_program')->insert($request);
            DB::commit();
            return true; // succes
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('message', $e->errorInfo[2]);
            return false; // failed
        }
    }

    public static function getListProgram()
    {
        $response = DB::table('master_program')
        ->orderBy('id', 'desc')
        ->select('*')
        ->paginate(10);

        return $response;
    }

    public static function getProgramById($id)
    {
        $response = DB::table('master_program')
        ->select('*')
        ->where('id',$id)
        ->first();

        return $response;
    }

    public static function updateProgramById($request, $id)
    {
        try {
            DB::beginTransaction();
            DB::table('master_program')
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

    public static function destroyProgramById($id)
    {
        try {
            DB::beginTransaction();
            DB::table('master_program')->where('id', $id)->delete();
            DB::commit();
            return true; // succes
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('message', $e->errorInfo[2]);
            return false; // failed
        }
    }

    public static function searchProgram($request)
    {
        $response = DB::table('master_program')
        ->where('bidang', 'like', '%'.$request.'%')
        ->orWhere('kode_rekening_program', 'like', '%'.$request.'%')
        ->orWhere('nama_program', 'like', '%'.$request.'%')
        ->get();

        return $response;
    }

    public static function countProgram()
    {
        $response = DB::table('master_program')
        ->count();

        return $response;
    }
}
