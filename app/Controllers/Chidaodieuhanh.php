<?php

namespace App\Controllers;

use App\Models\NewModel;

class Chidaodieuhanh extends BaseController
{
	public function index()
	{
		$getAllCDDH = new NewModel();
		$AllCDDH = $getAllCDDH->getAllCDDH();
		$data['AllCDDH'] = $AllCDDH;
		$data['title'] = 'Chỉ đạo điều hành';
		return view('client/chi-dao-dh', $data);
	}
}
