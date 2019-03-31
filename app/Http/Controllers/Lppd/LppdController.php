<?php

namespace App\Http\Controllers\Lppd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Lppd\LppdModel as Lppd;
use Carbon\Carbon;
use Validator;
use PDF;
use File;
use Session;

class LppdController extends Controller
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
        $response = Lppd::getListLppd();

        \Debugbar::info($response);

        return view('lppd.index', compact('response'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = Lppd::getListLppd();

        \Debugbar::info($response);

        return view('lppd.create', compact('response'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $destinationPath1 = 'uploads/lppd/bidang1';

        if ($request->input('option') == 'tidak') {
            $option  = '';
            $dokumen = '';
        }

        if ($request->input('option') == 'ada') {
            if ($request->file('file') != null || !empty($request->file('file'))) {
                $rand = rand(1111,9999);
                $file = $request->file('file');
                $file->move($destinationPath1 , $rand . '_' . $file->getClientOriginalName());
                $dokumen = $destinationPath1 . '/' . $rand . '_' . $file->getClientOriginalName();
            } else {
                $dokumen = $request->input('original');
            }
            $option = 'ada';
        }

        if ($request->input('option') == '') {
            $option  = '';
            $dokumen = '';
        }

        $requestData = array(
            'keterangan'    => $option,
            'dokumen'       => $dokumen,
        );

        // dd($requestData);

        $id = $request->input('id');

        // dd($id);

        if (Lppd::updateLppd($requestData, $id) == true) {
            $response = true;
        } else {
            File::delete($dokumen);
            $response = false;
        }

        // dd($response);

        if ($response == true) {
            return redirect()
                ->route('lppd.create')
                ->with('success', 'Data LPPD Berhasil Dilengkapi');
        } else {
            return redirect()
                ->route('lppd.create')
                ->with('error', Session::get('message'));
        }
    }

    public function printToPdf()
    {
        $response = Lppd::getListLppd();

        \Debugbar::info($response);

        // return view('lppd.printPdf', compact('response'));

        $pdf = PDF::loadView('lppd.printPdf', compact('response'))->setPaper('f4', 'landscape');
        return $pdf->download('LAPORAN LPPD.pdf');
    }

}
