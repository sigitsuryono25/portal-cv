<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
	public function index()
	{
		$data['info'] = $this->getInfo();
		$master['page'] = view('dashboard', $data);
		$master['title'] = "Dashboard";
		$master['bread'] = ['home', 'Dashboard'];
		$master['session'] = $this->session->get();
		return view('master-template', $master);
	}

	private function getInfo()
	{
		$username = $this->session->get('username');
		$data = $this->db->query("SELECT * FROM tutor WHERE username IN ('$username')")->getRowArray();
		$data['tentang'] = strip_tags($data['tentang']);
		$data['education'] = json_decode($data['education']);
		$data['project'] = json_decode($data['project']);
		$data['skill'] = json_decode($data['skill']);
		// echo json_encode($data);
		return $data;
	}
}
