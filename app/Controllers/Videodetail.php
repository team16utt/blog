<?php

namespace App\Controllers;

use App\Models\Videodetailmodel;

class Videodetail extends BaseController
{
	public function index()
	{
		if (isset($_GET['id'])){
			$id =  $_GET['id'];
			$videodetail = new Videodetailmodel();
			$video_result = $videodetail->getVideoById($id);
			$data['video_result'] = $video_result;
			$data['title'] = 'Xem Video';
			return view('client/video-detail', $data);
		}
	}
}