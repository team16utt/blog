<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TimelineModel;
class Timelines extends BaseController
{
	public function index()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$getNews = new TimelineModel();
		$Timeline= $getNews->getAllTimelineForAdmin();
		$data['Timeline'] = $Timeline;
		return view('admin/timeline/all-timeline',$data);
	}

    public function add()
	{
		return view('admin/timeline/add-timelines');
	}
}