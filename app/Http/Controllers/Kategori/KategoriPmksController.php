<?php

namespace App\Http\Controllers\Kategori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Kategori\KategoriModel as Master;
use Carbon\Carbon;
use PDF;

class KategoriPmksController extends Controller
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
        $masters = Master::latest()->paginate(10);

        \Debugbar::info($masters);

        return view('kategori.index', compact('masters'))
        ->with('i',(request()->input('page',1) -1 ) * 10);
    }

    public function search(Request $request)
    {
        $masters = Master::where('kategori', 'like', '%' . $request->input('search') . '%')
                    ->orWhere('jumlah_orang', 'like', '%' . $request->input('search') . '%')
                    ->orWhere('bidang', 'like', '%' . $request->input('search') . '%')
                    ->get();

        return view('kategori.search', compact('masters'))
        ->with('i',(request()->input('page',1) -1 ) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'bidang'       => 'required',
            'kategori'     => 'required',
            'deskripsi'    => 'required',
            'jumlah_orang' => 'required',
            'sudah_ditangani' => 'required',
            'belum_ditangani' => 'required',
        ]);

        $requestData = array(
            'bidang'       => $request->input('bidang' ),
            'kategori'     => $request->input('kategori' ),
            'deskripsi'    => $request->input('deskripsi'),
            'jumlah_orang' => $request->input('jumlah_orang' ),
            'sudah_ditangani' => $request->input('sudah_ditangani' ),
            'belum_ditangani' => $request->input('belum_ditangani' ),
            'dibuat'       => Carbon::now()->timestamp,
            'diubah'       => '',
            'gambar'       => '',
        );

        Master::create($requestData);

        return redirect()->route('kategori-pmks.index')
        ->with('success', 'Data Kategori PMKS Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $masters = Master::find($id);
        \Debugbar::info($masters);
        return view('kategori.show', compact('masters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $masters = Master::find($id);
        \Debugbar::info($masters);
        return view('kategori.edit', compact('masters'));
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
        request()->validate([
            'bidang'       => 'required',
            'kategori'     => 'required',
            'deskripsi'    => 'required',
            'jumlah_orang' => 'required',
            'sudah_ditangani' => 'required',
            'belum_ditangani' => 'required',
        ]);

        $requestData = array(
            'bidang'       => $request->input('bidang'),
            'kategori'     => $request->input('kategori'),
            'deskripsi'    => $request->input('deskripsi' ),
            'jumlah_orang' => $request->input('jumlah_orang'),
            'sudah_ditangani' => $request->input('sudah_ditangani'),
            'belum_ditangani' => $request->input('belum_ditangani'),
            'dibuat'       => $request->input('dibuat'),
            'diubah'       => Carbon::now()->timestamp,
            'gambar'       => '',
        );

        $masters = Master::find($id);
        $masters->update($requestData);
        $masters->save();

        return redirect()->route('kategori-pmks.index')
        ->with('success', 'Data Kategori PMKS Berhasil Di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Master::destroy($id);
        return redirect()->route('kategori-pmks.index')
        ->with('success', 'Data Kategori PMKS Berhasil Di Hapus');
    }

    public function printToPdf()
    {
        $masters = Master::all();

        \Debugbar::info($masters);

        // return view('kategori.printPdf', compact('masters'));

        $pdf = PDF::loadView('kategori.printPdf', compact('masters'))->setPaper('f4', 'portait');
        return $pdf->download('REKAPITULASI DATA PMKS KABUPATEN BANDUNG BARAT.pdf');
    }
}
