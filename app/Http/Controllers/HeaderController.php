<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class HeaderController extends Controller
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
        $header = Header::all();
        return view('backend.header.index', [
            'header' => $header
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
           return view('backend.header.create');
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
            'title' => 'required|min:4',
            'head' => 'required|min:4',
            'desk' => 'required|min:4'
        ]);

        $data = $request->all();

        $data['gambar_header'] = $request->file('gambar_header')->store('header');

        Header::create($data);

        Alert::success('Berhasil', 'Data berhasil tersimpan');
        return redirect()->route('header.index');
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
        $header = Header::find($id);
        return view('backend.header.edit', [
            'header' => $header
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

        $header = Header::find($id);
        $header->update([
        'title' => $request->title,
        'head' => $request->head,
        'desk' => $request->desk,
        ]);
         Alert::info('Update', 'Data berhasil terupdate');
          return redirect()->route('header.index');
        } else {
        $header = Header::find($id);
        Storage::delete($header->gambar_header);
        $header->update([
        'title' => $request->title,
        'head' => $request->head,
        'desk' => $request->desk,
        'gambar_testimoni' => $request->file('gambar_testimoni')->store('header'),
        ]);
         Alert::info('Update', 'Data berhasil terupdate');
           return redirect()->route('header.index');
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
         $header = Header::find($id);

       Storage::delete($header->gambar_header);
       $header->delete();

       Alert::warning('Hapus', 'Data berhasil terhapus');
        return redirect()->route('header.index');
    }

}

