<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Artikel;
use App\Pengajar;
use App\Bimbel;

class AdminActionsController extends Controller
{
    public function addpaket(Request $request)
    {
    	$data=new Paket();
    	$data->nama=$request->nama;
    	$data->detail=$request->detail;
    	$data->harga=$request->harga;
    	$data->jenjang=$request->jenjang;
    	$file=$request->file('gambar');
        if (!$file) {
            return redirect()->route('AdminAddPaket')->with('alert','foto harus diisi!');
        }
        $file_name=$file->getClientOriginalName();
        $path=public_path('/img');
        $file->move($path,$file_name);
        $data->gambar='img/'.$file_name;
    	$data->save();
        return redirect()->route('AdminShowPaket');
    }
    public function addartikel(Request $request)
    {
    	$data=new Artikel();
    	$data->judul=$request->judul;
    	$data->detail=$request->detail;
    	$file=$request->file('gambar');
        if (!$file) {
            return redirect()->route('AdminAddArtikel')->with('alert','foto harus diisi!');
        }
        $file_name=$file->getClientOriginalName();
        $path=public_path('/img');
        $file->move($path,$file_name);
        $data->gambar='img/'.$file_name;
    	$data->save();
        return redirect()->route('AdminShowArtikel');
    }
    public function addpengajar(Request $request)
    {
    	$data=new Pengajar();
    	$data->nama=$request->nama;
    	$data->nip=$request->nip;
    	$data->id_paket=$request->paket;
    	$data->save();
        return redirect()->route('AdminShowPengajar');
    }
    public function terima($id)
    {
        $data=Bimbel::find($id);
        $data->status='aktif';
        $data->save();
        return redirect()->route('AdminShowBimbel');
    }
    public function selesai($id)
    {
        $data=Bimbel::find($id);
        $data->status='selesai';
        $data->save();
        return redirect()->route('AdminShowBimbel');
    }

}
