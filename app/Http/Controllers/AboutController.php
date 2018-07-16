<?php 

namespace App\Http\Controllers;

class AboutController extends Controller {
	
	public function showAbout()
	{
		//new syntax in laravel 5.2
		return view('pages.about');
	}

}
