<?php

namespace App\Controllers;

use App\Models\TimelineModel;

class Dongthoigian extends BaseController
{
	public function index()
	{
		$timeLine = new TimelineModel();
		$total_timeline = $timeLine->getCountTimeline();
		$total_pages = ceil($total_timeline / 5);
		$data['total_pages'] = $total_pages;

		if (isset($_GET['page'])){
			$page =  $_GET['page'];
		} else{
			$page = 1;
		}
		$offset = ($page - 1) * 5;
		$all_time_line = $timeLine->getTimeline($offset,5);
		$data['all_time_line'] = $all_time_line;
		$data['title'] = 'Dòng thời gian';
		$data['page'] = $page;
		return view('client/Dong-thoi-gian', $data);
	}
}
