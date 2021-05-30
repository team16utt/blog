<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		session_start();

        if (empty($_SESSION['user']))
		{
            return redirect()->to(base_url().'/admin/login');
        }
		$data['title'] = 'Home';
		return view('admin/index', $data);
	}
}