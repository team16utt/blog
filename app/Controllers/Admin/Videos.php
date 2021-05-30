<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\VideoModel;
class Videos extends BaseController
{
	public function index()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$getVideo = new VideoModel();
		$Videos= $getVideo->getAllVideoForAdmin();
		$data['title'] = 'Videos';
		$data['Videos'] = $Videos;
		return view('admin/video/all-video',$data);
	}

    public function add()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$data['title'] = 'Add Videos';
		return view('admin/video/add-video', $data);
	}

	
}