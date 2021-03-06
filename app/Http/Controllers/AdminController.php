<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Artikel;
use App\Pengajar;
use App\User;
use App\Feedback;
use App\Bimbel;

class AdminController extends Controller
{

//////////////////////////////////////////////////// Show
	public function dashboard()
	{
		return view('admin.dashboard');
	}

	public function show_paket()
	{
		$data=Paket::all();
		return view('admin.paket',compact('data'));
	}

	public function show_artikel()
	{
		$data=Artikel::all();
		
		return view('admin.artikel',compact('data'));
	}

	public function show_user()
	{
		$data=User::all();
		return view('admin.user',compact('data'));
	}

	public function show_feedback()
	{
		$data=Feedback::all();
		
		return view('admin.feedback',compact('data'));
	}

	public function show_pengajar()
	{
		$data=Pengajar::all();
		$paket=Paket::all();
		return view('admin.pengajar',compact('data','paket'));
	}

	public function show_bimbel()
	{
		$data=Bimbel::all();
		return view('admin.bimbel',compact('data'));
	}

	

///////////////////////////////////////////////////////////// Add
	public function show_add_paket()
	{
		return view('admin.add.add-paket');
	}

	public function show_add_artikel()
	{
		return view('admin.add.add-artikel');
	}

	public function show_add_pengajar()
	{
		$paket=Paket::all();
		return view('admin.add.add-pengajar',compact('paket'));
	}

	public function show_add_about()
	{
		return view('admin.add.add-about');
	}

	public function show_add_contact()
	{
		return view('admin.add.add-contact');
	}

}
