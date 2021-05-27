<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController
{
	public function index()
	{
		return view('admin/all-admin');
	}

    public function add()
	{
		return view('admin/add-admin');
	}
}