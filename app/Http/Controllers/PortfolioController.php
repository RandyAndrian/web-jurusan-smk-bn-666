<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Portfolio;
use App\Models\KategoriPortfolio;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('backend.portfolio.post.index', [
            'portfolio' => $portfolio
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriPortfolio::all();
        return view('backend.portfolio.post.create', [
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
            'judul' => 'required|min:4'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['user_id'] = Auth::id();
        $data['gambar_portfolio'] = $request->file('gambar_portfolio')->store('portfolio');

        Portfolio::create($data);

        Alert::success('Berhasil', 'Data berhasil tersimpan');
        return redirect()->route('portfolio.index');
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
        $portfolio = Portfolio::find($id);
        $kategori = KategoriPortfolio::all();

        return view('backend.portfolio.post.edit', [
            'portfolio' => $portfolio,
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
      if(empty($request->file('gambar_portfolio'))) {

        $portfolio = Portfolio::find($id);
        $portfolio->update([
        'judul' => $request->judul,
        'deksripsi' => $request->deskripsi,
        'slug' => Str::slug($request->judul),
        'katagori_portfolio_id' => $request->kategori_portfolio_id,
        'user_id' => Auth::id(),
        ]);
         Alert::info('Update', 'Data berhasil terupdate');
          return redirect()->route('portfolio.index');
        } else {
        $portfolio = Portfolio::find($id);
        Storage::delete($portfolio->gambar_artikel);
        $portfolio->update([
        'judul' => $request->judul,
        'deksripsi' => $request->deskripsi,
        'slug' => Str::slug($request->judul),
        'katagori_portfolio_id' => $request->kategori_portfolio_id,
        'user_id' => Auth::id(),
        'gambar_artikel' => $request->file('gambar_portfolio')->store('portfolio'),
        ]);
         Alert::info('Update', 'Data berhasil terupdate');
           return redirect()->route('portfolio.index');
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
        $portfolio = Portfolio::find($id);

       Storage::delete($portfolio->gambar_artikel);
       $portfolio->delete();

       Alert::warning('Hapus', 'Data berhasil terhapus');
        return redirect()->route('portfolio.index');
    }
}
