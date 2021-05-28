<?php

namespace App\Controllers;

use App\Models\NewModel;
use App\Models\TimelineModel;
use App\Models\VideoModel;

class Home extends BaseController
{
	public function index()
	{
		$getNewModel = new NewModel();
		$getTimeLines = new TimelineModel();
		$getVideoModel = new VideoModel();

		$AllNews = $getNewModel->getAllNews();
		$data['AllNews'] = $AllNews;

		$AllDCB = $getNewModel->getAllDCB();
		$data['AllDCB'] = $AllDCB;

		$AllRecommendation = $getNewModel->getAllRecommendation();
		$data['AllRecommendation'] = $AllRecommendation;

		$AllCDDH = $getNewModel->getAllCDDH();
		$data['AllCDDH'] = $AllCDDH;
		
		// $AllCSPCD = $getNewModel->getAllCSPCD();
		// $data['AllCSPCD'] = $AllCSPCD;

		$AllTimeLine = $getTimeLines->getAllTimeLine();
		$data['AllTimeLine'] = $AllTimeLine;

		$AllVideo = $getVideoModel->getAllVideo();
		$data['AllVideo'] = $AllVideo;

		return view('client/trang-chu', $data);
	}
}
