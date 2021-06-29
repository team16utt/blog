<?php

namespace App\Controllers;

use App\Models\NewModel;

class Chinhsach extends BaseController
{
	public function index()
	{
		if (isset($_GET['page'])){
			$page =  $_GET['page'];
		} else{
			$page = 1;
		}
		$offset = ($page - 1) * 5;
		$getCSPCDH = new NewModel();
		$total_CSPCD = $getCSPCDH->getCountCSPCD();
		$total_pages = ceil($total_CSPCD / 5);
		$CSPCD = $getCSPCDH->getCSPCD($offset, 5);
		$data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['CSPCD'] = $CSPCD;
		$data['title'] = 'Chính sách phòng chống dịch';
		return view('client/Chinh-sach', $data);
	}
}
