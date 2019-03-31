<?php

namespace App\Http\Models\Lppd;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException as Exception;
use DB;
use Session;

class LppdModel extends Model
{
    protected $table = 'lppd';

    protected $fillable = [
        'keterangan',
        'dokumen',
    ];

    public static function updateLppd($request,$id)
    {
        try {
            DB::beginTransaction();
            DB::table('lppd')->where('id', $id)->update($request);
            DB::commit();
            return true; // succes
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('message', $e->errorInfo[2]);
            return false; // failed
        }
    }

    public static function getListLppd()
    {
        $response = DB::table('lppd')
        ->orderBy('id', 'asc')
        ->select('*')
        ->get();

        return $response;
    }

}
