<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\VideoModel;
class Videos extends BaseController
{
	public function index()
	{
		$getVideo = new VideoModel();
		$Videos= $getVideo->getAllVideoForAdmin();
		$data['Videos'] = $Videos;
		return view('admin/all-video',$data);
	}

    public function add()
	{
		return view('admin/add-video');
	}

	
}