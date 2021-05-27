<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Timelines extends BaseController
{
	public function index()
	{
		return view('admin/all-timeline');
	}

    public function add()
	{
		return view('admin/add-timelines');
	}
}