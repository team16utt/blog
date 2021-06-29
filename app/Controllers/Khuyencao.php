<?php

namespace App\Controllers;
use App\Models\NewModel;
class Khuyencao extends BaseController
{
	public function index()
	{
		if (isset($_GET['page'])){
			$page =  $_GET['page'];
		} else{
			$page = 1;
		}
		$offset = ($page - 1) * 5;
		$recommendationModel = new NewModel();
		$total_Recommendation = $recommendationModel->getCountRecommendation();
		$total_pages = ceil($total_Recommendation / 5);
		$recommendation = $recommendationModel->getRecommendation($offset, 5);
		$data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['recommandation'] = $recommendation;
		$data['title'] = 'Khuyến cáo';
		return view('client/Khuyen-cao', $data);
	}
}
