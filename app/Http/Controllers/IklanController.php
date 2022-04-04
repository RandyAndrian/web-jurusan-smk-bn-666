<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Iklan;
use RealRashid\SweetAlert\Facades\Alert;


class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iklan = Iklan::all();
        return view('backend.berita.iklan.index', [
            'iklan' => $iklan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.berita.iklan.create');
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
            'judul_iklan' => 'required|min:4'
        ]);

        $data = $request->all();
        $data['gambar_iklan'] = $request->file('gambar_iklan')->store('iklan');

        Iklan::create($data);

        Alert::success('Berhasil', 'Data berhasil tersimpan');
        return redirect()->route('iklan.index');
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
        $iklan= Iklan::find($id);

        return view('backend.berita.iklan.edit', [
            'iklan' => $iklan
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
          if(empty($request->file('gambar_iklan'))) {

        $iklan = iklan::find($id);
        $iklan->update([
        'judul_iklan' => $request->judul_iklan,
        'link' => $request->link,

        ]);
          Alert::info('Update', 'Data berhasil terupdate');
          return redirect()->route('iklan.index');

        } else {
        $iklan = iklan::find($id);
        Storage::delete($iklan->gambar_iklan);
        $iklan->update([
         'judul_slide' => $request->judul_slide,
        'link' => $request->link,
        'gambar_iklan' => $request->file('gambar_iklan')->store('iklan'),
        ]);
          Alert::info('Update', 'Data berhasil terupdate');
           return redirect()->route('iklan.index');
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
        $iklan = Iklan::find($id);

       Storage::delete($iklan->gambar_iklan);
       $iklan->delete();

        Alert::warning('Hapus', 'Data berhasil terhapus');
        return redirect()->route('iklan.index')->with(['success' => 'Data berhasil terhapus']);
    }
}
