<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Galeri;
use RealRashid\SweetAlert\Facades\Alert;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $galeri = Galeri::all();
        return view('backend.galeri.post.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.galeri.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data['gambar_galeri'] = $request->file('gambar_galeri')->store('galeri');
        $data['user_id'] = Auth::id();
        Galeri::create($data);

        Alert::success('Berhasil', 'Data berhasil tersimpan');
        return redirect()->route('galeri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $galeri = Galeri::find($id);

        return view('backend.galeri.post.edit', [
            'galeri' => $galeri,
        ]);
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
        $galeri = Galeri::find($id);
        Storage::delete($galeri->gambar_galeri);
        $galeri->update([
        'user_id' => Auth::id(),
        'gambar_galeri' => $request->file('gambar_galeri')->store('galeri'),
        ]);
         Alert::info('Update', 'Data berhasil terupdate');
           return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $galeri = Galeri::find($id);

       Storage::delete($galeri->gambar_galeri);
       $galeri->delete();

       Alert::warning('Hapus', 'Data berhasil terhapus');
        return redirect()->route('galeri.index');
    }
}
