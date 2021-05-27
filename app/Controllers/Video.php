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
		return view('client/video', $data);
	}
}
