<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\KategoriJurusan;
use App\Models\KategoriPortfolio;
use App\Models\Portfolio;
use App\Models\Iklan;
use App\Models\SocialMedia;
use App\Models\Kontak;
use App\Models\Galeri;
use App\Models\TextKontak;
use App\Models\TextTestimoni;
use App\Models\Testimoni;
use App\Models\Jurusan;
use App\Models\Header;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index() {
        $kategori = KategoriJurusan::all();
        $social = SocialMedia::all();
        $testimoni = Testimoni::all();
        $kontak = Kontak::where('id', '1')->first();
        $TextKontak = TextKontak::where('id', '1')->first();
        $TextTestimoni = TextTestimoni::where('id', '1')->first();
        $header = Header::where('id', '1')->first();
        return view('frontend.home', [
            'kategori' => $kategori,
            'social' => $social,
            'testimoni' => $testimoni,
            'kontak' => $kontak,
            'TextKontak' => $TextKontak,
            'TextTestimoni' => $TextTestimoni,
            'header' => $header
        ]);
    }

    public function port() {
        $kategori = KategoriJurusan::all();
        $kategori_portfolio = KategoriPortfolio::all();
        $portfolio = Portfolio::latest()->paginate('9');
        $social = SocialMedia::all();
        return view('frontend.portfolio', [
            'kategori' => $kategori,
            'social' => $social,
            'kategori_portfolio' => $kategori_portfolio,
            'portfolio' => $portfolio
        ]);
    }

    public function berita() {
        $kategori = Kategori::all();
        $kategori_jurusan = KategoriJurusan::all();
        $social = SocialMedia::all();
        $artikel = Artikel::latest()->paginate('9');

       // dd($artikel->links());
        return view('frontend.berita', [
            'kategori' => $kategori,
            'berita' => $artikel,
            'kategori_jurusan' => $kategori_jurusan,
            'social' => $social
        ]);
    }

    public function gallery() {
        $kategori = KategoriJurusan::all();
        $social = SocialMedia::all();
        $galeri = Galeri::latest()->paginate('9');
        return view('frontend.galeri', [
            'galeri' => $galeri,
            'kategori' => $kategori,
            'social' => $social
        ]);
    }

    public function detail($slug) {

        $kategori = Kategori::all();
        $social = SocialMedia::all();
        $kategori_jurusan = KategoriJurusan::all();
        $artikel = Artikel::where('slug', $slug)->first();
        $iklan = Iklan::where('id', '1')->first();

        $postinganTerbaru = Artikel::orderBy('created_at', 'DESC')->limit('5')->get();
        return view('frontend.artikel.detail-artikel', [
            'artikel' => $artikel,
            'kategori' => $kategori,
            'kategori' => $kategori_jurusan,
            'social' => $social,
            'iklan' => $iklan,
            'postinganTerbaru' => $postinganTerbaru
        ]);
    }

    public function detail_portfolio($slug) {

        $kategori = KategoriPortfolio::all();
        $social = SocialMedia::all();
        $kategori_jurusan = KategoriJurusan::all();
        $portfolio = Portfolio::where('slug', $slug)->first();

        return view('frontend.portfolio.detail-portfolio', [
            'portfolio' => $portfolio,
            'kategori' => $kategori,
            'kategori' => $kategori_jurusan,
            'social' => $social,
        ]);
    }

   public function kategori_berita(Kategori $kategori, $id) {
    $kategori = Kategori::all();
    $berita = Artikel::where('kategori_id',$id)->paginate('9');
    $social = SocialMedia::all();

    return view('frontend.kategori.berita', [
        'berita' => $berita,
        'kategori' => $kategori,
        'social' => $social
    ]);
   }

   public function kategori_portfolio(KategoriPortfolio $kategori, $id) {
   $kategori = KategoriPortfolio::all();
   $portfolio = Portfolio::where('kategori_portfolio_id',$id)->paginate('9');
   $social = SocialMedia::all();


       return view('frontend.kategori.portfolio', [
        'kategori' => $kategori,
        'portfolio' => $portfolio,
        'social' => $social,
       ]);
   }

      public function jurusan(KategoriJurusan $kategori, $id) {

        $social = SocialMedia::all();
        $kategori = KategoriJurusan::all();
        $jurusan = Jurusan::where('kategori_jurusan_id', $id)->first();
        return view('frontend.jurusan.profil', [

            'jurusan' => $jurusan,
            'kategori' => $kategori,
            'social' => $social,
        ]);
    }
}
