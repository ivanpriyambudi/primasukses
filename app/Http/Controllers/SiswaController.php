<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bimbel;
use Auth;
use App\Paket;
use App\User;

class SiswaController extends Controller
{
    public function dashboard()
    {
    	return view('siswa.dashboard');
    }

    public function show_edit_profile()
    {
        $data=User::where('id',Auth::guard('user')->user()->id)->get();
    	return view('siswa.edit-profile',compact('data'));
    }

    public function show_paket()
    {
        $data=Bimbel::where('id_user',Auth::guard('user')->user()->id)->get();
    	return view('siswa.paket',compact('data'));
    }

    public function detail_paket($id)
    {
        $data=Paket::where('id',$id)->get();
        $status=Bimbel::where('id_paket',$id)->where('id_user',Auth::guard('user')->user()->id)->value('status');
    	return view('siswa.detail-paket',compact('data','status'));
    }
}
