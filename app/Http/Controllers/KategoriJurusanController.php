<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\KategoriJurusan;

class KategoriJurusanController extends Controller
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
      $kategori = KategoriJurusan::all();

        return view('backend.jurusan.kategori.index', [
            'kategori_jurusan' => $kategori
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
       return view('backend.jurusan.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          if(Auth::user()->is_admin != 1) {
            abort(403);
        }
       $this->validate($request, [
            'nama_kategori' => 'required|min:4'
        ]);

        $kategori = KategoriJurusan::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori)
        ]);

        Alert::success('Berhasil', 'Data berhasil tersimpan');
        return redirect()->route('kategori_jurusan.index');
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
       $kategori = KategoriJurusan::find($id);

        return view('backend.jurusan.kategori.edit', [
            'kategori_jurusan' => $kategori
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
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);

        $kategori = KategoriJurusan::findOrFail($id);
        $kategori->update($data);

        Alert::info('Update', 'Data berhasil terupdate');
         return redirect()->route('kategori_jurusan.index');
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
        $kategori = KategoriJurusan::find($id);

        $kategori->delete();

        Alert::warning('Hapus', 'Data berhasil terhapus');
        return redirect()->route('kategori_jurusan.index');
    }
}
