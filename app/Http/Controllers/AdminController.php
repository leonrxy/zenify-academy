<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
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
        return view('admin/dashboard');
    }
    public function kelolaProgram()
    {
        return view('admin/kelola-program/index');
    }
    public function tambahProgram()
    {
        return view('admin/kelola-program/tambah');
    }
    public function kelolaSiswa()
    {
        return view('admin/kelola-siswa/index');
    }
}
