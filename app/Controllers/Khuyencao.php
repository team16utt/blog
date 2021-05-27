<?php

namespace App\Controllers;
use App\Models\NewModel;
class Khuyencao extends BaseController
{
	public function index()
	{
		$recommandationModel = new NewModel();
		$recommandation = $recommandationModel->getAllRecommandation();
		$data['recommandation'] = $recommandation;
		return view('client/khuyen-cao', $data);
	}
}
