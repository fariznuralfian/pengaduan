<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Masyarakat;
use Auth;
use DataTables;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;


class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengaduan::all();
        return view('pages.laporan.index', compact('data'));
    }

    public function userLaporan()
    {
        return view('pages.laporan.user-laporan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.laporan.user-laporan');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (auth()->check()) {
        //     # code...
        
        // $data= $request->all();

        // $idmas = Auth::user()->id_masyarakat;

        // $data['id_masyarakat']=$idmas;
        // if($request->hasFile('foto')){
        //     $data['foto']=$request->file('foto')->storeAs('pengaduan', $request->foto->getClinetOriginalName());
        // }

        // Pengaduan::create($data);

        // return redirect(route('laporan'))->with('success', 'pengaduan berhasil dikirim');
        // }
        // return redirect(route('laporan'))->with('success', 'pengaduan berhasil dikirim');
        // // return redirect(route('laporan.index'))->with('success', 'Data Berhasil Ditambahkan');

 
        // $request->validate([
        //     'isi_laporan' => 'required',
        //     'tgl_pengaduan' => 'required'

        // ], [
        //     'isi_laporan.required' => 'Pengaduan wajib diisi',
        //     'tgl_pengaduan.required' => 'Tanggal wajib diisi'
        // ]);

        // if (!empty(request()->foto)) {
        //     request()->validate(['foto' => 'image|mimes:jpeg,png,jpg|max:2048',]);
        //     $namaFile = time() . '.' . request()->foto->extension();
        //     request()->foto->move(public_path('img'), $namaFile);
        // } else {
        //     $namaFile = null;
        // }

        // DB::table('pengaduan')->insert(
        //     [
        //         // 'jenis_pengaduan_id' => $request->jenis,
        //         'users_id' => $request->users,
        //         'tgl_pengaduan' => $request->tgl_pengaduan,
        //         'isi_laporan' => $request->isi_laporan,
        //         // 'bukti' => $namaFile
        //     ]
        // );

        // return redirect('laporan.index')->withSuccessMessage('Pengaduan berhasil di Kirim');
    
        // return $request->all();
        $mytime = Carbon::now();
        Auth::user()->user_id;
        $this->validate($request, [
            'judul' => 'required',
            'isi_laporan' => 'required', 
            'foto' => 'required'

        ]);

         if($request->hasFile('foto')){
         $data['foto']=$request->file('foto')->storeAs('pengaduan', $request->foto->getClinetOriginalName());}
     

         Pengaduan::create([
            'judul' => $request->judul,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $request->foto,
            'tgl_pengaduan' => $mytime->toDateTimeString(),
            'id_masyarakat' => '3  ',
            'kategori' => $request->kategori_laporan
        ]);
        return redirect()->route('laporan.index')->with('success','Laporan Berhasil Dikirim');
    
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $pengaduan=Pengaduan::find($id);
        // if(!pengaduan){
        //     return redirect()->back();
        // }
        // $pengaduan->delete();
        // return redirect()->route('laporan.index');
    }
}
