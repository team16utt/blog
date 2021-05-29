<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NewModel;
class Recommend extends BaseController
{
	public function index()
	{
		$getRecommend = new NewModel();
		$Recommend= $getRecommend->getAllRecommendForAdmin();
		$data['Recommend'] = $Recommend;
		return view('admin/all-recommened',$data);
	}

    public function add()
	{
		return view('admin/add-recommened');
	}
}