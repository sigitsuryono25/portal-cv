<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cv extends BaseController
{
	public function index()
	{
		$data['info'] = $this->getInfo();
		$data['info']['ttl'] = $this->etc->indonesiaDate($data['info']['ttl']);
		$data['title'] = "Curriculum Vitae - ". $data['info']['nama'];
		return view('cv/cv-saya', $data);
	}

	function formCv()
	{
		$data['info'] = $this->getInfo();
		$master['page'] = view('cv/form-cv', $data);
		$master['title'] = "Form CV";
		$master['bread'] = ['home', 'Curriculum Vitae', "Form CV"];
		$master['session'] = $this->session->get();
		return view('master-template', $master);
	}

	public function setEducation()
	{
		$username = $this->session->get('username');
		$qualification = $this->request->getPost('qualification');
		$principalStudies = $this->request->getPost('principal_studies');
		$institution = $this->request->getPost('institution');
		$year = $this->request->getPost('year');
		$data = [];

		foreach ($qualification as $i => $v) {
			$tmp = [];
			$tmp['qualification'] = $v;
			$tmp['principal_studies'] = $principalStudies[$i];
			$tmp['institution'] = $institution[$i];
			$tmp['year'] = $year[$i];

			array_push($data, $tmp);
		}

		$updData = ['education' => json_encode($data)];
		$upd = $this->db->table('tutor')->update($updData, ['username' => $username]);
		if ($upd) {
			echo json_encode(['message' => "berhasil diubah", 'code' => 200]);
		} else {
			echo json_encode(['message' => "gagal diubah", 'code' => 500]);
		}
	}

	function setProject()
	{
		$username = $this->session->get('username');
		$project = $this->request->getPost('project');
		$institution = $this->request->getPost('institution');
		$platform = $this->request->getPost('platform');
		$year = $this->request->getPost('year');
		$url = $this->request->getPost('url');
		$data = [];

		foreach ($project as $i => $v) {
			$tmp = [];
			$tmp['project'] = $v;
			$tmp['institution'] = $institution[$i];
			$tmp['platform'] = $platform[$i];
			$tmp['year'] = $year[$i];
			if (!empty($url)) {
				$tmp['url'] = $url[$i];
			} else {
				$tmp['url'] = "";
			}

			array_push($data, $tmp);
		}


		$updData = ['project' => json_encode($data)];
		$upd = $this->db->table('tutor')->update($updData, ['username' => $username]);
		if ($upd) {
			echo json_encode(['message' => "berhasil diubah", 'code' => 200]);
		} else {
			echo json_encode(['message' => "gagal diubah", 'code' => 500]);
		}
	}

	public function setSkills()
	{
		$username = $this->session->get('username');
		$programmingLang = $this->request->getPost('programming_lang');
		$mobilePlatforms = $this->request->getPost('mobile_platforms');
		$os = $this->request->getPost('os');
		$database = $this->request->getPost('database');
		$framework = $this->request->getPost('framework');
		$ide = $this->request->getPost('ide');

		$data['programming_lang'] = $programmingLang;
		$data['mobile_platforms'] = $mobilePlatforms;
		$data['os'] = $os;
		$data['database'] = $database;
		$data['framework'] = $framework;
		$data['ide'] = $ide;
		$updData = json_encode($data);
		$upd = $this->db->table('tutor')->update(['skill' => $updData], ['username' => $username]);
		if ($upd) {
			echo json_encode(['message' => "berhasil diubah", 'code' => 200]);
		} else {
			echo json_encode(['message' => "gagal diubah", 'code' => 500]);
		}
	}

	function setPersonalInfo()
	{
		$username = $this->session->get('username');
		$nama = $this->request->getPost("nama");
		$descriptions = $this->request->getPost("descriptions");
		$alamat = $this->request->getPost("alamat");
		$telepon = $this->request->getPost("telepon");
		$email = $this->request->getPost("email");
		$kebangsaan = $this->request->getPost("kebangsaan");
		$ttl = $this->request->getPost("ttl");
		$gender = $this->request->getPost("gender");
		$tentang = $this->request->getPost("tentang");
		$gambar = $this->request->getPost("gambar");

		$datupd = [
			'nama' => $nama,
			'descriptions' => $descriptions,
			'tentang' => $tentang,
			'gambar' => $gambar,
			'kebangsaan' => $kebangsaan,
			'ttl' => $ttl,
			'gender' => $gender,
			'alamat' => $alamat,
			'telepon' => $telepon,
			'email' => $email,
		];
		$where = ['username' => $username];

		$upd = $this->db->table('tutor')->update($datupd, $where);
		if ($upd) {
			echo json_encode(['message' => "berhasil diubah", 'code' => 200]);
		} else {
			echo json_encode(['message' => "gagal diubah", 'code' => 500]);
		}
	}

	function getInfo()
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
