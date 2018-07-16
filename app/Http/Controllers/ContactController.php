<?php namespace App\Http\Controllers;

class ContactController extends Controller {
	
	public function showContact()
	{
		//new syntax in laravel 5.2
		return view('pages.contact');
	}
}
