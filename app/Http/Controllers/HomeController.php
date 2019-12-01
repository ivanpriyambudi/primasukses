<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Artikel;
use App\Paket;

use Auth;

class HomeController extends Controller
{
    public function home(){

        $artikel = DB::table('artikel')->paginate(4);

        return view('landing.home', ['artikel' => $artikel]);
    }

    public function about()
    {
        

        return view('landing.about');
    }

    public function artikel()
    {
        $artikel = DB::table('artikel')->paginate(4);

        return view('landing.artikel', ['artikel' => $artikel]);
    }

    public function artikel_detail($id)
    {
        $artikel = Artikel::where('id', $id)->get();
        $recent = DB::table('artikel')->paginate(3);

        return view('landing.artikel-detail',compact('artikel','recent'));
    }

    public function paket_sd()
    {
        $sd = Paket::where('jenjang', 'SD')->get();
        
        return view('landing.paket',compact('sd'));
    }

    public function paket_smp()
    {
        $smp = Paket::where('jenjang', 'SMP')->get();
        
        return view('landing.paket',compact('smp'));
    }

    public function paket_sma()
    {
        $sma = Paket::where('jenjang', 'SMA')->get();
        
        return view('landing.paket',compact('sma'));
    }

    public function paket_detail($id)
    {
        $paket = Paket::where('id', $id)->get();

        return view('landing.paket-detail',compact('paket'));
    }

    public function contact()
    {
        

        return view('landing.contact');
    }

    public function join()
    {
        return view('landing.login-reg');
    }
}
