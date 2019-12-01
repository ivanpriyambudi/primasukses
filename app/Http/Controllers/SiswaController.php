<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function dashboard()
    {
    	return view('siswa.dashboard');
    }

    public function show_edit_profile()
    {
    	return view('siswa.edit-profile');
    }

    public function show_paket()
    {
    	return view('siswa.paket');
    }

    public function detail_paket()
    {
    	return view('siswa.detail-paket');
    }
}
