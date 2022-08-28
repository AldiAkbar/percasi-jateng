<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // buat function index yang akan redirect ke halaman dashboard
    public function index(){
        return view('dashboard.index', [
            'title' => 'Dashboard Admin'
        ]);
    }

    // buat function agenda yang akan redirect ke halaman manage agenda
    public function agenda(){
        return view('dashboard.agenda', [
            'title' => 'Manage Agenda'
        ]);
    }

    // buat function atletPON yang akan redirect ke halaman manage atlet PON
    public function atletPON(){
        return view('dashboard.atlet-pon', [
            'title' => 'Manage Atlet PON'
        ]);
    }
    
    // buat function atletDaerah yang akan redirect ke halaman manage atlet daerah
    public function atletDaerah(){
        return view('dashboard.atlet-daerah', [
            'title' => 'Manage Atlet Daerah'
        ]);
    }

    // buat function news yang akan redirect ke halaman manage news
    public function news(){
        return view('dashboard.news', [
            'title' => 'Manage News'
        ]);
    }

    // buat function pengurusPusat yang akan redirect ke halaman manage pengurus Pusat
    public function pengurusPusat(){
        return view('dashboard.pengurus-pusat', [
            'title' => 'Manage Pengurus Pusat'
        ]);
    }
    
    // buat function pengurusDaerah yang akan redirect ke halaman manage pengurus daerah
    public function pengurusDaerah(){
        return view('dashboard.pengurus-daerah', [
            'title' => 'Manage Pengurus Daerah'
        ]);
    }
}
