<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Artikel;

class HomeController extends Controller
{
    public function about()
    {
        $about = About::all();

        return view('landing.about',compact('about'));
    }

    public function artikel()
    {
        $artikel = Artikel::all();

        return view('landing.artikel',compact('artikel'));
    }

    public function artikel_detail()
    {
        return view('landing.artikel-detail');
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
