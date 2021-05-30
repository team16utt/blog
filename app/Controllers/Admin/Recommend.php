<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NewModel;
class Recommend extends BaseController
{
	public function index()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$getRecommend = new NewModel();
		$Recommend= $getRecommend->getAllRecommendForAdmin();
		$data['title'] = 'Recommend';
		$data['Recommend'] = $Recommend;
		return view('admin/recommend/all-recommened',$data);
	}

    public function add()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$data['title'] = 'Add Recommend';
		return view('admin/recommend/add-recommened', $data);
	}
}