<?php

namespace App\Controllers;

use App\Models\VideoModel;

class Video extends BaseController
{
	public function index()
	{
		$videoModel = new VideoModel();
		$video = $videoModel->getAllVideo();
		$data['video'] = $video;
		$data['title'] = 'Video';
		return view('client/video', $data);
	}
}
