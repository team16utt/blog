<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NewModel;
class News extends BaseController
{
	public function index()
	{
		$getNews = new NewModel();
		$News= $getNews->getAllNewsForAdmin();
		$data['News'] = $News;
		return view('admin/all-news',$data);
	}

    public function add()
	{
		return view('admin/add-news');
	}
}