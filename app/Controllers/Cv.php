<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cv extends BaseController
{
	public function index()
	{
		//
	}

	function formCv()
	{
		$master['page'] = view('cv/form-cv');
		$master['title'] = "Form CV";
		$master['bread'] = ['home', 'Curriculum Vitae', "CV Saya"];
		return view('master-template', $master);
	}

	public function setEducation()
	{
		$username = $this->request->getGet('uuid');
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
		if($upd){
			echo json_encode(['message' => "berhasil diubah", 'code' => 200]);
		}else{
			echo json_encode(['message' => "gagal diubah", 'code' => 500]);
		}
	}

	function setProject()
	{
		$username = $this->request->getGet('uuid');
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
		if($upd){
			echo json_encode(['message' => "berhasil diubah", 'code' => 200]);
		}else{
			echo json_encode(['message' => "gagal diubah", 'code' => 500]);
		}
	}

	function getInfo()
	{
		$username = $this->request->getGet('uuid');
		$data = $this->db->query("SELECT * FROM tutor WHERE username IN ('$username')")->getRowArray();
		$data['tentang'] = strip_tags($data['tentang']);
		$data['education'] = json_decode($data['education']);
		echo json_encode($data);
	}
}
