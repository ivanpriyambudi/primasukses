<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bimbel;
use App\Feedback;
use App\User;
use Illuminate\Support\Facades\Hash;
use Auth;
class UserActionsController extends Controller
{
   	public function daftarbimbel(Request $request)
   	{
   		$data=new Bimbel();
   		$data->status='belum aktif';
   		$data->id_paket=$request->paket;
   		$data->id_user=$request->user;
   		$data->save();
   	    return redirect()->route('SiswaShowPaket');
   	}
   	public function feedback(Request $request)
   	{
   		$data=new Feedback();
   		$data->isi=$request->detail;
   		$data->id_paket=$request->paket;
   		$data->id_user=$request->user;
   		$data->save();
   	    return redirect()->route('SiswaShowPaket');
   	}
   	public function editprofile(Request $request)
   	{
   		$data=User::find(Auth::guard('user')->user()->id);
   		$data->nama=$request->nama;
   		$data->email=$request->email;
   		$data->telp=$request->telp;
   		
   		$data->jenjang=$request->jenjang;
   		$data->password=Hash::make($request->password);
   		$data->save();
   	    return redirect()->route('logout');
   	}
}
