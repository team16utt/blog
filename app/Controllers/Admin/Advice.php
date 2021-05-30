<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NewModel;
class Advice extends BaseController
{
	public function index()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$getAdvice = new NewModel();
		$Advice= $getAdvice->getAllAdviceForAdmin();
		$data['title'] = 'Advice';
		$data['Advice'] = $Advice;
		return view('admin/advice/all-advice',$data);
	}

    public function add()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$data['title'] = 'Add Advice';
		return view('admin/advice/add-advice', $data);
	}
}