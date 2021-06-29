<?php

namespace App\Controllers;

use App\Models\NewModel;
class News extends BaseController
{
	public function index()
	{
		if (isset($_GET['page'])){
			$page = $_GET['page'];
		} else{
			$page = 1;
		}
		$offset = ($page - 1) * 5;
		$newModel =  new NewModel();
		$total_News = $newModel->getCountNews();
		$total_pages = ceil($total_News / 5);
		$newPost = $newModel->getNews($offset, 5);
		$data['page'] = $page;
		$data['total_pages'] = $total_pages;
		$data['newPost'] = $newPost;
		$data['title'] = 'Tin tức';
		return view('client/Tin-tuc', $data);
	}
}
