<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Advice extends BaseController
{
	public function index()
	{
		return view('admin/all-advice');
	}

    public function add()
	{
		return view('admin/add-advice');
	}
}