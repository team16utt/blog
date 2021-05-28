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
		return view('client/chi-dao-dh', $data);
	}
}
