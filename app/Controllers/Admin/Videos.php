<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Videos extends BaseController
{
	public function index()
	{
		return view('admin/all-video');
	}

    public function add()
	{
		return view('admin/add-video');
	}
}