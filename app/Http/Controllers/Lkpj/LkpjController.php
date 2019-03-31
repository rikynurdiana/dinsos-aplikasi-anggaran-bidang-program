<?php

namespace App\Http\Controllers\Lkpj;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Program\ProgramModel as Program;
use App\Http\Models\Kegiatan\KegiatanModel as Kegiatan;
use App\Http\Models\Lkpj\LkpjModel as Lkpj;
use Carbon\Carbon;
use Validator;
use PDF;

class LkpjController extends Controller
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
        $response = Lkpj::getListLkpj();

        \Debugbar::info($response);

        return view('lkpj.index', compact('response'))
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
        $response = Lkpj::searchLkpj($request);

        \Debugbar::info($response);

        return view('lkpj.search', compact('response'))
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

        return  view('lkpj.create', compact('program'));
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
            'nama_program'   => 'required',
            'nama_kegiatan'  => 'required',
            'anggaran'       => 'required',
            'realisasi'      => 'required',
            'hasil_kegiatan' => 'required',
        );

        $messages = [
            'required' => ' wajib di isi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('lkpj.create')->withErrors($validator)->withInput();
        } else {
            $request = array(
                'bidang'                 => $request->input('bidang') ? $request->input('bidang') : '',
                'kode_rekening_program'  => $request->input('kode_rekening_program') ? $request->input('kode_rekening_program') : '',
                'nama_program'           => $request->input('nama_program') ? $request->input('nama_program') : '',
                'kode_rekening_kegiatan' => $request->input('kode_rekening_kegiatan') ? $request->input('kode_rekening_kegiatan') : '',
                'nama_kegiatan'          => $request->input('nama_kegiatan') ? $request->input('nama_kegiatan') : '',
                'anggaran'               => $request->input('anggaran') ? str_replace(',','',$request->input('anggaran')) : '',
                'realisasi'              => $request->input('realisasi') ? str_replace(',','',$request->input('realisasi')) : '',
                'persentase'             => $request->input('persentase') ? $request->input('persentase') : '',
                'hasil_kegiatan'         => $request->input('hasil_kegiatan') ? $request->input('hasil_kegiatan') : '',
                'created_at'             => Carbon::now()->timestamp,
                'updated_at'             => ''
            );

            $response = Lkpj::createNewLkpj($request);

            if ($response == true) {
                return redirect()
                    ->route('lkpj.index')
                    ->with('success', 'Data LKPJ Berhasil Ditambahkan');
            } else {
                return redirect()
                    ->route('lkpj.index')
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
        $response = Lkpj::getLkpjById($id);

        \Debugbar::info($response);

        return  view('lkpj.show', compact('response'));
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
        $response = Lkpj::getLkpjById($id);

        $response = array(
            'program'  => $program,
            'response' => $response,
        );

        \Debugbar::info($response);

        return  view('lkpj.edit', compact('response'));
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
            'nama_program'   => 'required',
            'nama_kegiatan'  => 'required',
            'anggaran'       => 'required',
            'realisasi'      => 'required',
            'hasil_kegiatan' => 'required',
        );

        $messages = [
            'required' => ' wajib di isi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('lkpj.create')->withErrors($validator)->withInput();
        } else {
            $request = array(
                'bidang'                 => $request->input('bidang') ? $request->input('bidang') : '',
                'kode_rekening_program'  => $request->input('kode_rekening_program') ? $request->input('kode_rekening_program') : '',
                'nama_program'           => $request->input('nama_program') ? $request->input('nama_program') : '',
                'kode_rekening_kegiatan' => $request->input('kode_rekening_kegiatan') ? $request->input('kode_rekening_kegiatan') : '',
                'nama_kegiatan'          => $request->input('nama_kegiatan') ? $request->input('nama_kegiatan') : '',
                'anggaran'               => $request->input('anggaran') ? str_replace(',','',$request->input('anggaran')) : '',
                'realisasi'              => $request->input('realisasi') ? str_replace(',','',$request->input('realisasi')) : '',
                'persentase'             => $request->input('persentase') ? $request->input('persentase') : '',
                'hasil_kegiatan'         => $request->input('hasil_kegiatan') ? $request->input('hasil_kegiatan') : '',
                'created_at'             => $request->input('created_at') ? $request->input('created_at') : '',
                'updated_at'             => Carbon::now()->timestamp,
            );

            $response = Lkpj::updateLkpjById($request,$id);

            if ($response == true) {
                return redirect()
                    ->route('lkpj.index')
                    ->with('success', 'Data LKPJ Berhasil Ditambahkan');
            } else {
                return redirect()
                    ->route('lkpj.index')
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
        $response = Lkpj::destroyLkpjById($id);

        if ($response == true) {
            return redirect()
                ->route('lkpj.index')
                ->with('success', 'Data LKPJ Terpilih Berhasil Dihapus');
        } else {
            return redirect()
                ->route('lkpj.index')
                ->with('error', Session::get('message'));
        }
    }

    public function getKegiatanByProgram(Request $request)
    {
        $request = $request->input('kode_program');

        $response = Kegiatan::getKegiatanByProgram($request);

        return json_encode($response);
    }

    public function printToPdf()
    {
        $response   = Lkpj::getBidang();

        \Debugbar::info($response);

        // return view('lkpj.printPdf', compact('response'));

        $pdf = PDF::loadView('lkpj.printPdf', compact('response'))->setPaper('f4', 'portait');
        return $pdf->download('LKPJ DINAS SOSIAL.pdf');
    }
}
