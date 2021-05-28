<?php

namespace App\Controllers;
use App\Models\NewModel;
class Khuyencao extends BaseController
{
	public function index()
	{
		$recommendationModel = new NewModel();
		$recommendation = $recommendationModel->getAllRecommendation();
		$data['recommandation'] = $recommendation;
		return view('client/khuyen-cao', $data);
	}
}
