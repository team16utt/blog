<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NewModel;
class Advice extends BaseController
{
	public function index()
	{
		$getAdvice = new NewModel();
		$Advice= $getAdvice->getAllAdviceForAdmin();
		$data['Advice'] = $Advice;
		return view('admin/all-advice',$data);
	}

    public function add()
	{
		return view('admin/add-advice');
	}
}