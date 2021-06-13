<?php

namespace App\Controllers;

use App\Models\NewModel;
class News extends BaseController
{
	public function index()
	{
		$newModel =  new NewModel();
		$newPost = $newModel->getAllNews();
		$data['newPost'] = $newPost;
		$data['title'] = 'Tin tức';
		return view('client/Tin-tuc', $data);
	}
}
