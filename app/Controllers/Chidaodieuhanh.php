<?php

namespace App\Controllers;

use App\Models\NewModel;

class Chidaodieuhanh extends BaseController
{
	public function index()
	{
		if (isset($_GET['page'])){
			$page =  $_GET['page'];
		} else{
			$page = 1;
		}
		$offset = ($page - 1) * 5;
		$getAllCDDH = new NewModel();
		$total_CDDH = $getAllCDDH->getCountCDDH();
		$total_pages = ceil($total_CDDH / 5);
		$AllCDDH = $getAllCDDH->getCDDH($offset, 5);
		$data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['AllCDDH'] = $AllCDDH;
		$data['title'] = 'Chỉ đạo điều hành';
		return view('client/Chi-dao-dh', $data);
	}
}
