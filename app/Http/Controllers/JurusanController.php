<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\KategoriJurusan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->is_admin != 1) {
            abort(403);
        }
        $jurusan = Jurusan::all();
        return view('backend.jurusan.post.index', [
            'jurusan' => $jurusan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           if(Auth::user()->is_admin != 1) {
            abort(403);
        }
        $kategori = KategoriJurusan::all();
        return view('backend.jurusan.post.create', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'desk' => 'required|min:4',
        ]);

        $data = $request->all();

        $data['gambar_profil'] = $request->file('gambar_profil')->store('jurusan');

        Jurusan::create($data);

        Alert::success('Berhasil', 'Data berhasil tersimpan');
        return redirect()->route('jurusan.index');
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
          if(Auth::user()->is_admin != 1) {
            abort(403);
        }
        $jurusan = Jurusan::find($id);
        $kategori = KategoriJurusan::all();
        return view('backend.jurusan.post.edit', [
            'jurusan' => $jurusan,
            'kategori' => $kategori
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
        if(Auth::user()->is_admin != 1) {
            abort(403);
        }
        if(empty($request->file('gambar_profil'))) {

        $jurusan = Jurusan::find($id);
        $jurusan->update([
        'kategori_jurusan' => $request->kategori_jurusan,
        'desk' => $request->desk,
        ]);
         Alert::info('Update', 'Data berhasil terupdate');
          return redirect()->route('jurusan.index');
        } else {
        $jurusan = Jurusan::find($id);
        Storage::delete($jurusan->gambar_profil);
        $jurusan->update([
        'kategori_jurusan' => $request->kategori_jurusan,
        'desk' => $request->desk,
        'gambar_profil' => $request->file('gambar_profil')->store('jurusan'),
        ]);
         Alert::info('Update', 'Data berhasil terupdate');
           return redirect()->route('jurusan.index');
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
      if(Auth::user()->is_admin != 1) {
            abort(403);
        }
         $jurusan = Jurusan::find($id);

       Storage::delete($jurusan->gambar_artikel);
       $jurusan->delete();

       Alert::warning('Hapus', 'Data berhasil terhapus');
        return redirect()->route('jurusan.index');
    }
}
