<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TextKontak;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TextKontakController extends Controller
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
        $text = TextKontak::all();
        return view('backend.kontak.text.index', [
            'text' => $text
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.kontak.text.create');
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
            'title' => 'required',
            'desk' => 'required'
        ]);

        $text = TextKontak::create([
            'title' => $request->title,
            'desk' => $request->desk,
        ]);

        Alert::success('Berhasil', 'Data berhasil tersimpan');
        return redirect()->route('text_kontak.index');
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
      $text = TextKontak::find($id);

        return view('backend.kontak.text.edit', [
            'text' => $text
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
        $text = TextKontak::findOrFail($id);
        $text->update($data);

        Alert::info('Update', 'Data berhasil terupdate');
         return redirect()->route('text_kontak.index');
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
        $text = TextKontak::find($id);

        $text->delete();

        Alert::warning('Hapus', 'Data berhasil terhapus');
        return redirect()->route('text_kontak.index');
    }
}
