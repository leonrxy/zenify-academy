<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard(): View
    {
        return view('siswa/dashboard');
    }
    public function kelasku()
    {
        return view('siswa/kelasku');
    }
    public function jadwal()
    {
        return view('siswa/jadwal');
    }
    public function liveClass()
    {
        return view('siswa/live-class');
    }
    public function videoBelajar()
    {
        return view('siswa/video-belajar');
    }
    public function tryout()
    {
        return view('siswa/tryout');
    }
    public function sharingSoal()
    {
        return view('siswa/sharing-soal');
    }
}
