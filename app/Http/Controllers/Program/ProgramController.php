<?php

namespace App\Http\Controllers\Program;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Program\ProgramModel as Program;
use Carbon\Carbon;
use Validator;
use PDF;

class ProgramController extends Controller
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
        $response = Program::getListProgram();

        \Debugbar::info($response);

        return view('program.index', compact('response'))
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
        $response = Program::searchProgram($request);

        \Debugbar::info($response);

        return view('program.search', compact('response'))
        ->with('i',(request()->input('page',1) -1 ) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('program.create');
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
            'bidang'                => 'required',
            'kode_rekening_program' => 'required',
            'nama_program'          => 'required',
        );

        $messages = [
            'required' => ' wajib di isi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('program.create')->withErrors($validator)->withInput();
        } else {
            $request = array(
                'bidang'                => $request->input('bidang') ? $request->input('bidang') : '',
                'kode_rekening_program' => $request->input('kode_rekening_program') ? $request->input('kode_rekening_program') : '',
                'nama_program'          => $request->input('nama_program') ? $request->input('nama_program') : '',
                'created_at'            => Carbon::now()->timestamp,
                'updated_at'            => ''
            );

            $response = Program::createNewProgram($request);

            if ($response == true) {
                return redirect()
                    ->route('program.index')
                    ->with('success', 'Data Master program Berhasil Ditambahkan');
            } else {
                return redirect()
                    ->route('program.index')
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
        $response = Program::getProgramById($id);

        \Debugbar::info($response);

        return  view('program.show', compact('response'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response = Program::getProgramById($id);

        \Debugbar::info($response);

        return  view('program.edit', compact('response'));
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
            'bidang'                => 'required',
            'kode_rekening_program' => 'required',
            'nama_program'          => 'required',
        );

        $messages = [
            'required' => ' wajib di isi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('program.edit',$id)->withErrors($validator)->withInput();
        } else {
            $request = array(
                'bidang'                => $request->input('bidang') ? $request->input('bidang') : '',
                'kode_rekening_program' => $request->input('kode_rekening_program') ? $request->input('kode_rekening_program') : '',
                'nama_program'          => $request->input('nama_program') ? $request->input('nama_program') : '',
                'created_at'            => $request->input('created_at') ? $request->input('created_at') : '',
                'updated_at'            => Carbon::now()->timestamp
            );

            $response = Program::updateProgramById($request,$id);

            if ($response == true) {
                return redirect()
                    ->route('program.index')
                    ->with('success', 'Data Master program Berhasil Ditambahkan');
            } else {
                return redirect()
                    ->route('program.index')
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
        $response = Program::destroyProgramById($id);

        if ($response == true) {
            return redirect()
                ->route('program.index')
                ->with('success', 'Data Master program Terpilih Berhasil Dihapus');
        } else {
            return redirect()
                ->route('program.index')
                ->with('error', Session::get('message'));
        }
    }

    public function printToPdf()
    {
        $response = Program::all();

        \Debugbar::info($response);

        // return view('program.printPdf', compact('response'));

        $pdf = PDF::loadView('program.printPdf', compact('response'))->setPaper('f4', 'landscape');
        return $pdf->download('PROGRAM DINAS SOSIAL.pdf');
    }
}
