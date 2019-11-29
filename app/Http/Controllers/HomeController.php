<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
    	return view('landing.about');
    }

    public function artikel()
    {
    	return view('landing.artikel');
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
