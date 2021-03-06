<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NewModel;
class News extends BaseController
{
	public function index()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
		$getNews = new NewModel();
		$News= $getNews->getAllNews();
		$data['title'] = 'News';
		$data['News'] = $News;
		return view('admin/new/All-news',$data);
	}

    public function add()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
		$data['title'] = 'Add New';
		if ($this->request->getMethod() == 'post') {

            $model = new NewModel();
            $title = $this->request->getVar('title');
			$image = $this->request->getVar('image');
            $heading = $this->request->getVar('heading');
            $summernote = $this->request->getVar('summernote');
            $data_insert = [
				'category_id' => '1',
				'time' => date('Y-m-d H:i:s'),
                'title' => $title,
				'image' => $image,
                'heading' => $heading,
                'content' => $summernote,
				'author' => $_SESSION['user']['username']
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/News');
        }
		echo view('admin/new/Add-news', $data);
	}

	public function edit()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
		$data['title'] = 'Edit New';
		$id = $_GET['id'];
        $getNews = new NewModel();
        $News = $getNews->getById($id);
        $data['News'] = $News;
        if ($this->request->getMethod() == 'post') {

            $model = new NewModel();
            $title = $this->request->getVar('title');
			$image = $this->request->getVar('image');
            $heading = $this->request->getVar('heading');
            // $user = $this->request->getVar('username');
            $summernote = $this->request->getVar('summernote');
            $data_insert = [
                'id' => $id,
				'category_id' => '1',
				'time' => date('Y-m-d H:i:s'),
                'title' => $title,
				'image' => $image,
                'heading' => $heading,
                'content' => $summernote,
				// 'author' => $user['username']
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/News');
        }
        echo view('admin/new/Edit-news', $data);
	}
    
	public function delete()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
        $id = $_GET['id'];
        $News = new NewModel();
        $News->where('id', $id)->delete();
        $data['title'] = 'News';
        $data['user'] = $News->findAll();
        return redirect()->to(base_url() . '/admin/News');
    }
}