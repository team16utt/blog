<?php

namespace App\Controllers;

use App\Models\VideoModel;

class Video extends BaseController
{
	public function index()
	{
		if (isset($_GET['page'])){
			$page =  $_GET['page'];
		} else{
			$page = 1;
		}
		
		$videoModel = new VideoModel();
		$total_video = $videoModel->getCountVideo();
		$total_pages = ceil($total_video / 5);
		$offset = ($page - 1) * 5;
		$video = $videoModel->getVideo($offset,5);
		$data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['video'] = $video;
		$data['title'] = 'Video';
		return view('client/Video', $data);
	}
}
