<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TestimoniController extends Controller
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
        $testimoni = Testimoni::all();
        return view('backend.testimoni.index', [
            'testimoni' => $testimoni
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
           return view('backend.testimoni.create');
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
            'name' => 'required|min:4',
            'role' => 'required|min:4',
            'desk' => 'required|min:4'
        ]);

        $data = $request->all();

        $data['gambar_testimoni'] = $request->file('gambar_testimoni')->store('testimoni');

        Testimoni::create($data);

        Alert::success('Berhasil', 'Data berhasil tersimpan');
        return redirect()->route('testimoni.index');
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
        $testimoni = Testimoni::find($id);
        return view('backend.testimoni.edit', [
            'testimoni' => $testimoni
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
        if(empty($request->file('gambar_testimoni'))) {

        $testimoni = Testimoni::find($id);
        $testimoni->update([
        'name' => $request->name,
        'role' => $request->role,
        'desk' => $request->desk,
        ]);
         Alert::info('Update', 'Data berhasil terupdate');
          return redirect()->route('testimoni.index');
        } else {
        $testimoni = Testimoni::find($id);
        Storage::delete($testimoni->gambar_testimoni);
        $testimoni->update([
        'nama' => $request->nama,
        'role' => $request->role,
        'desk' => $request->desk,
        'gambar_testimoni' => $request->file('gambar_testimoni')->store('testimoni'),
        ]);
         Alert::info('Update', 'Data berhasil terupdate');
           return redirect()->route('testimoni.index');
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
         $testimoni = Testimoni::find($id);

       Storage::delete($testimoni->gambar_artikel);
       $testimoni->delete();

       Alert::warning('Hapus', 'Data berhasil terhapus');
        return redirect()->route('testimoni.index');
    }
}

