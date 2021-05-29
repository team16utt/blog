<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TimelineModel;
class Timelines extends BaseController
{
	public function index()
	{
		$getNews = new TimelineModel();
		$Timeline= $getNews->getAllTimelineForAdmin();
		$data['Timeline'] = $Timeline;
		return view('admin/all-timeline',$data);
	}

    public function add()
	{
		return view('admin/add-timelines');
	}
}