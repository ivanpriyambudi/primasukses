<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\About;
use App\Artikel;

class HomeController extends Controller
{
    public function home(){

        $artikel = DB::table('artikel')->paginate(4);

        return view('landing.home', ['artikel' => $artikel]);
    }

    public function about()
    {
        $about = About::all();

        return view('landing.about',compact('about'));
    }

    public function artikel()
    {
        $artikel = DB::table('artikel')->paginate(6);

        return view('landing.artikel', ['artikel' => $artikel]);
    }

    public function artikel_detail($id)
    {
        $artikel = Artikel::where('id', $id)->get();
        $recent = DB::table('artikel')->paginate(3);

        return view('landing.artikel-detail',compact('artikel','recent'));
    }

    public function paket()
    {
        
        return view('landing.paket');
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
