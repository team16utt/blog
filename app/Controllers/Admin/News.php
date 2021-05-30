<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NewModel;
class News extends BaseController
{
	public function index()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$getNews = new NewModel();
		$News= $getNews->getAllNewsForAdmin();
		$data['title'] = 'News';
		$data['News'] = $News;
		return view('admin/new/all-news',$data);
	}

    public function add()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$data['title'] = 'Add News';
		return view('admin/new/add-news', $data);
	}
}