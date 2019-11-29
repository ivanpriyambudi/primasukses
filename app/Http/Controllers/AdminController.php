<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

//////////////////////////////////////////////////// Show
	public function dashboard()
	{
		return view('admin.dashboard');
	}

	public function show_paket()
	{
		return view('admin.paket');
	}

	public function show_artikel()
	{
		return view('admin.artikel');
	}

	public function show_user()
	{
		return view('admin.user');
	}

	public function show_feedback()
	{
		return view('admin.feedback');
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

	public function show_add_user()
	{
		return view('admin.add.add-user');
	}
}
