<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NewModel;
use DateTime;

class Direction extends BaseController
{
	public function index()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
		$getDirection = new NewModel();
		$Direction= $getDirection->getAllCDDH();
		$data['title'] = 'Direction';
		$data['Direction'] = $Direction;
		return view('admin/direction/All-direction',$data);
	}

    public function add()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
		$data['title'] = 'Add Direction';
		if ($this->request->getMethod() == 'post') {

            $model = new NewModel();
            $title = $this->request->getVar('title');
			$image = $this->request->getVar('image');
            $heading = $this->request->getVar('heading');
            $summernote = $this->request->getVar('summernote');
            $data_insert = [
				'category_id' => '4',
				'time' => date('Y-m-d H:i:s'),
                'title' => $title,
				'image' => $image,
                'heading' => $heading,
                'content' => $summernote,
				'author' => $_SESSION['user']['username']
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/Direction');
        }
		echo view('admin/direction/Add-direction', $data);
	}
    
	public function edit()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
		$data['title'] = 'Edit Direction';
		$id = $_GET['id'];
        $getDirection = new NewModel();
        $Direction = $getDirection->getById($id);
        $data['Direction'] = $Direction;
        if ($this->request->getMethod() == 'post') {
            $model = new NewModel();
            $title = $this->request->getVar('title');
			$image = $this->request->getVar('image');
            $heading = $this->request->getVar('heading');
            $summernote = $this->request->getVar('summernote');
            $data_insert = [
                'id' => $id,
				'category_id' => '4',
				'time' => date('Y-m-d H:i:s'),
                'title' => $title,
				'image' => $image,
                'heading' => $heading,
                'content' => $summernote,
				'author' => $_SESSION['user']['username']
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/Direction');
        }
        echo view('admin/direction/Edit-direction', $data);
	}

	public function delete()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
        $id = $_GET['id'];
        $Direction = new NewModel();
        $Direction->where('id', $id)->delete();
        $data['title'] = 'Direction';
        $data['Direction'] = $Direction->findAll();
        return redirect()->to(base_url() . '/admin/Direction');
    }
}