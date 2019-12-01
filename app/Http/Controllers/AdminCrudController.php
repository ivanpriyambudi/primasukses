<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Artikel;
use App\Pengajar;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminCrudController extends Controller
{
    public function editpaket(Request $request)
    {
    	$data=Paket::find($request->id);
    	$data->nama=$request->nama;
    	$data->harga=$request->harga;
    	if ($request->gambar==null) {
    		# code...
    	} else {
    		$file=$request->file('gambar');
        
            $file_name=$file->getClientOriginalName();
        	$path=public_path('/img');
        	$file->move($path,$file_name);
        	$data->gambar='img/'.$file_name;
    	}
    	$data->detail=$request->detail;
    	$data->save();
    	return redirect()->route('AdminShowPaket');
    }
    public function editartikel(Request $request)
    {
    	$data=Artikel::find($request->id);
    	$data->judul=$request->judul;
    	if ($request->gambar==null) {
    		# code...
    	} else {
    		$file=$request->file('gambar');
        
            $file_name=$file->getClientOriginalName();
        	$path=public_path('/img');
        	$file->move($path,$file_name);
        	$data->gambar='img/'.$file_name;
    	}
    	$data->detail=$request->detail;
    	$data->save();
    	return redirect()->route('AdminShowArtikel');
    }
    public function editpengajar(Request $request)
    {
    	$data=Pengajar::find($request->id);
    	$data->nama=$request->nama;
    	
    	$data->id_paket=$request->paket;
    	$data->save();
    	return redirect()->route('AdminShowPengajar');
    }
    public function edituser(Request $request)
    {
    	$data=User::find($request->id);
    	$data->nama=$request->nama;
    	$data->password=Hash::make($request->password);
    	$data->email=$request->email;
    	$data->telp=$request->telp;
    	$data->jenjang=$request->jenjang;
    	$data->save();
    	return redirect()->route('AdminShowUser');
    }
    
    public function hapuspaket($id)
    {
    	$data=Paket::find($id);
    	$data->delete();
        return redirect()->route('AdminShowPaket');
    }
    public function hapusartikel($id)
    {
    	$data=Artikel::find($id);
    	$data->delete();
        return redirect()->route('AdminShowArtikel');
    }
    public function hapuspengajar($id)
    {
    	$data=Pengajar::find($id);
    	$data->delete();
        return redirect()->route('AdminShowPengajar');
    }
    public function hapususer($id)
    {
    	$data=User::find($id);
    	$data->delete();
        return redirect()->route('AdminShowUser');
    }

}
