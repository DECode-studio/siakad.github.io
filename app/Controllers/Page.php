<?php namespace App\Controllers;

class Page extends BaseController
{
	public function dashboard()
	{
		return view('dashboard');
	}
    
    public function viewkhs()
	{
		return view('view_khs');
	}
    
    public function viewkrs()
	{
		return view('view_krs');
	}

}