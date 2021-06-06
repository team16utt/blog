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
		$data['title'] = 'Add Video';
		if ($this->request->getMethod() == 'post') {

            $model = new VideoModel();
            $title = $this->request->getVar('title');
			$video = $this->request->getVar('video');
            $heading = $this->request->getVar('heading');
            $poster = $this->request->getVar('poster');
            $summernote = $this->request->getVar('summernote');
            $data_insert = [
				'time' => date('Y-m-d H:i:s'),
                'title' => $title,
				'video' => $video,
                'heading' => $heading,
				'poster' => $poster,
                'content' => $summernote,
				// 'author' => $_SESSION['user']['username']
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/Videos');
        }
		echo view('admin/video/add-video', $data);
	}

	public function edit()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$data['title'] = 'Edit Video';
		$id = $_GET['id'];
        $getVideos = new VideoModel();
        $Video = $getVideos->getById($id);
        $data['Video'] = $Video;
        if ($this->request->getMethod() == 'post') {

            $model = new VideoModel();
            $title = $this->request->getVar('title');
			$image = $this->request->getVar('image');
            $heading = $this->request->getVar('heading');
            $summernote = $this->request->getVar('summernote');
            $data_insert = [
                'id' => $id,
				'category_id' => '2',
				'time' => date('Y-m-d H:i:s'),
                'title' => $title,
				'image' => $image,
                'heading' => $heading,
                'content' => $summernote,
				// 'author' => $_SESSION['user']['username']
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/Videos');
        }
        echo view('admin/video/edit-video', $data);
	}

	public function delete()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $Videos = new VideoModel();
        $Videos->where('id', $id)->delete();
        $data['title'] = 'Video';
        $data['Videos'] = $Videos->findAll();
        return redirect()->to(base_url() . '/admin/Videos');
    }

	
}