<?php

namespace App\Http\Controllers\Kegiatan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Program\ProgramModel as Program;
use App\Http\Models\Kegiatan\KegiatanModel as Kegiatan;
use Carbon\Carbon;
use Validator;
use PDF;

class KegiatanController extends Controller
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
        $response = Kegiatan::getListKegiatan();

        \Debugbar::info($response);

        return view('kegiatan.index', compact('response'))
        ->with('i',(request()->input('page',1) -1 ) * 10);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $request = $request->input('search');
        $response = Kegiatan::searchKegiatan($request);

        \Debugbar::info($response);

        return view('kegiatan.search', compact('response'))
        ->with('i',(request()->input('page',1) -1 ) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program = Program::getListProgram();

        \Debugbar::info($program);

        return  view('kegiatan.create', compact('program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'nama_program'           => 'required',
            'kode_rekening_kegiatan' => 'required',
            'nama_kegiatan'          => 'required',
            'anggaran'               => 'required',
        );

        $messages = [
            'required' => ' wajib di isi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('kegiatan.create')->withErrors($validator)->withInput();
        } else {
            $request = array(
                'bidang'                 => $request->input('bidang') ? $request->input('bidang') : '',
                'kode_rekening_program'  => $request->input('kode_rekening_program') ? $request->input('kode_rekening_program') : '',
                'nama_program'           => $request->input('nama_program') ? $request->input('nama_program') : '',
                'kode_rekening_kegiatan' => $request->input('kode_rekening_kegiatan') ? $request->input('kode_rekening_kegiatan') : '',
                'nama_kegiatan'          => $request->input('nama_kegiatan') ? $request->input('nama_kegiatan') : '',
                'anggaran'               => $request->input('anggaran') ? str_replace(',','',$request->input('anggaran')) : '',
                'created_at'             => Carbon::now()->timestamp,
                'updated_at'             => ''
            );

            $response = Kegiatan::createNewKegiatan($request);

            if ($response == true) {
                return redirect()
                    ->route('kegiatan.index')
                    ->with('success', 'Data Master Kegiatan Berhasil Ditambahkan');
            } else {
                return redirect()
                    ->route('kegiatan.index')
                    ->with('error', Session::get('message'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = Kegiatan::getKegiatanById($id);

        \Debugbar::info($response);

        return  view('kegiatan.show', compact('response'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program  = Program::getListProgram();
        $response = Kegiatan::getKegiatanById($id);

        $response = array(
            'program'  => $program,
            'response' => $response,
        );

        \Debugbar::info($response);

        return  view('kegiatan.edit', compact('response'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'nama_program'           => 'required',
            'kode_rekening_kegiatan' => 'required',
            'nama_kegiatan'          => 'required',
            'anggaran'               => 'required',
        );

        $messages = [
            'required' => ' wajib di isi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('kegiatan.edit',$id)->withErrors($validator)->withInput();
        } else {
            $request = array(
                'bidang'                 => $request->input('bidang') ? $request->input('bidang') : '',
                'kode_rekening_program'  => $request->input('kode_rekening_program') ? $request->input('kode_rekening_program') : '',
                'nama_program'           => $request->input('nama_program') ? $request->input('nama_program') : '',
                'kode_rekening_kegiatan' => $request->input('kode_rekening_kegiatan') ? $request->input('kode_rekening_kegiatan') : '',
                'nama_kegiatan'          => $request->input('nama_kegiatan') ? $request->input('nama_kegiatan') : '',
                'anggaran'               => $request->input('anggaran') ? str_replace(',','',$request->input('anggaran')) : '',
                'created_at'             => $request->input('created_at') ? $request->input('created_at') : '',
                'updated_at'             => Carbon::now()->timestamp
            );

            $response = Kegiatan::updateKegiatanById($request,$id);

            if ($response == true) {
                return redirect()
                    ->route('kegiatan.index')
                    ->with('success', 'Data Master Kegiatan Berhasil Ditambahkan');
            } else {
                return redirect()
                    ->route('kegiatan.index')
                    ->with('error', Session::get('message'));
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Kegiatan::destroyKegiatanById($id);

        if ($response == true) {
            return redirect()
                ->route('kegiatan.index')
                ->with('success', 'Data Master Kegiatan Terpilih Berhasil Dihapus');
        } else {
            return redirect()
                ->route('kegiatan.index')
                ->with('error', Session::get('message'));
        }
    }

    public function printToPdf()
    {
        $response = Kegiatan::all();

        \Debugbar::info($response);

        // return view('kegiatan.printPdf', compact('response'));

        $pdf = PDF::loadView('kegiatan.printPdf', compact('response'))->setPaper('f4', 'landscape');
        return $pdf->download('PROGRAM KEGIATAN DINAS SOSIAL.pdf');
    }
}
