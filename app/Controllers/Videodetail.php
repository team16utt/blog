<?php

namespace App\Controllers;

use App\Models\VideoModel;

class Videodetail extends BaseController
{
	public function index()
	{
		if (isset($_GET['id'])){
			$id =  $_GET['id'];
			$videodetail = new VideoModel();
			$video_result = $videodetail->getVideoById($id);
			$data['video_result'] = $video_result;
			$data['title'] = 'Xem Video';
			return view('client/Video-detail', $data);
		}
	}
}