<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{
		echo view('headfoot/auth_header');
		echo view('headfoot/auth_footer');
		return view('auth/login');
	}
	public function register()
	{
		echo view('headfoot/auth_header');
		echo view('headfoot/auth_footer');
		return view('auth/register');
	}
	public function index()
	{
		echo view('headfoot/auth_header');
		echo view('headfoot/auth_footer');
		return view('auth/index');
	}
	public function admin()
	{
		return view('auth/admin');
	}
	public function info()
	{
		echo view('headfoot/auth_header');
		echo view('headfoot/auth_footer');
		return view('auth/info');
	}

	public function about()
	{
		echo view('headfoot/auth_header');
		echo view('headfoot/auth_footer');
		return view('auth/about');
	}
	//--------------------------------------------------------------------

}
