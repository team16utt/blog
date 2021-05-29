<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Admin extends BaseController
{
	public function index()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$getAdmin = new UserModel();
		$admin= $getAdmin->getAllAdmin();
		$data['admin'] = $admin;
		return view('admin/admin/all-admin',$data);
	}

    public function add()
	{
		return view('admin/admin/add-admin');
	}

}