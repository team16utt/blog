<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class News extends BaseController
{
	public function index()
	{
		return view('admin/all-news');
	}

    public function add()
	{
		return view('admin/add-news');
	}
}