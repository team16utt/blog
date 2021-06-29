<?php

namespace App\Controllers;

use App\Models\NewModel;

class Dieucanbiet extends BaseController
{
	public function index()
	{
		if (isset($_GET['page'])){
			$page =  $_GET['page'];
		} else{
			$page = 1;
		}
		$offset = ($page - 1) * 5;
		$DCBModel = new NewModel();
		$total_DCB = $DCBModel->getCountDCB();
		$total_pages = ceil($total_DCB / 5);
		$DCB = $DCBModel->getDCB($offset, 5);
		$data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['DCB'] = $DCB;
		$data['title'] = 'Điều cần biết';
		return view('client/Dieu-can-biet', $data);
	}
}
