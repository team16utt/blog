<?php

namespace App\Controllers;

use App\Models\NewModel;

class Postdetail extends BaseController
{
	public function index()
	{
		if (isset($_GET['id'])){
			$id =  $_GET['id'];
			$post = new NewModel();
			$post_result = $post->getById($id);
			$data['post_result'] = $post_result;
			$data['title'] = 'Bài viết';
			return view('client/post-detail',$data);
		}
	}
}