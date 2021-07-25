<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$master['bread'] = ['home', 'Dashboard'];
		$master['title'] = "Dashboard";
		$master['page'] = view("dashboard");
		return view('welcome_message', $master);
	}
}
