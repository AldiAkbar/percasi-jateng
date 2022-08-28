<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // buat function index yang akan redirect ke homepage
    public function index(){
        return view('home', [
            'title' => 'Home'
        ]);
    }

    // buat function about yang akan redirect ke tentang organisasi
    public function about(){
        return view('about', [
            'title' => 'About'
        ]);
    }

    // buat function agenda yang akan redirect ke daftar agenda dari percasi jateng
    public function agenda(){
        return view('agenda', [
            'title' => 'Agenda'
        ]);
    }

    // buat function atletPON yang akan redirect ke halaman daftar atlet PON Jawa Tengah
    public function atletPON(){
        return view('atlet-pon', [
            'title' => 'Atlet PON'
        ]);
    }

    // buat function atletDaerah yang akan redirect ke halaman
    // daftar atlet yang ada di JATENG
    public function atletDaerah(){
        return view('atlet-daerah', [
            'title' => 'Atlet Daerah'
        ]);
    }

    // buat function category yang akan redirect ke categori artikel
    public function category(){
        return view('category', [
            'title' => 'Category'
        ]);
    }

    // buat function galeri yang akan redirect ke halaman galeri
    public function galeri(){
        return view('galeri', [
            'title' => 'Galeri'
        ]);
    }

    // buat function pengurusInti yang akan redirect ke 
    // daftar pengurus inti PERCASU JARENG
    public function pengurusInti(){
        return view('pengurus-inti', [
            'title' => 'Pengurus Inti'
        ]);
    }

    // buat function pengurusCabang yang akan redirect ke 
    // daftar pengurus cabang PERCASU per daerah yang ada di JATENG
    public function pengurusCabang(){
        return view('pengurus-cabang', [
            'title' => 'Pengurus Cabang'
        ]);
    }

    // buat function singlePost yang akan redirect ke halaman single post
    public function singlePost(){
        return view('single-post', [
            'title' => 'Single Post'
        ]);
    }
}
