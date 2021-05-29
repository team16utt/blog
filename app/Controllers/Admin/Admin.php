<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User;

class Admin extends BaseController
{
	public function index()
	{
		$getAdmin = new User();
		$admin= $getAdmin->getAllAdmin();
		$data['admin'] = $admin;
		return view('admin/all-admin',$data);
	}

    public function add()
	{
		return view('admin/add-admin');
	}

}