<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Recommend extends BaseController
{
	public function index()
	{
		return view('admin/all-recommened');
	}

    public function add()
	{
		return view('admin/add-recommened');
	}
}