<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
	public function index()
	{
		return view('login/login');
	}

	public function loginProses()
	{
		$url = "https://lauwba.com/411/index.php/Presensi/login";
		$params = [
			'username' => 'sigitsuryono25',
			'password' => '12345'
		];

		$ch = curl_init();
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
		$response = curl_exec($ch);

		$d = json_decode($response, true);
		unset($d['data']['passwords']);
		$this->session->set($d['data']);
		$session = $this->session->has('username');
		if($session){
			echo json_encode(['message' => 'data ditemukan', 'code' => 200]);
		}else{
			echo json_encode(['message' => 'data tidak ditemukan. Silahkan cek kembali', 'code' => 500]);
		}

	}

	public function logout()
	{
		$this->session->stop();
		return redirect()->to('/login');
	}
}
