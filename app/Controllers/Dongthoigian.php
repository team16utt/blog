<?php

namespace App\Controllers;

use App\Models\TimelineModel;

class Dongthoigian extends BaseController
{
	public function index()
	{
		$timeLine = new TimelineModel();
		$all_time_line = $timeLine->getAllTimeLine();
		$data['all_time_line'] = $all_time_line;
		return view('client/dong-thoi-gian', $data);
	}
}
