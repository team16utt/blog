<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NewModel;
use DateTime;

class Policy extends BaseController
{
	public function index()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$getPolicy = new NewModel();
		$Policy= $getPolicy->getAllCSPCD();
		$data['title'] = 'Policy';
		$data['Policy'] = $Policy;
		return view('admin/policy/all-policy',$data);
	}

    public function add()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$data['title'] = 'Add Policy';
		if ($this->request->getMethod() == 'post') {

            $model = new NewModel();
            $title = $this->request->getVar('title');
			$source = $this->request->getVar('source');
			$province = $this->request->getVar('province');
            $heading = $this->request->getVar('heading');
            $summernote = $this->request->getVar('summernote');
            $data_insert = [
				'category_id' => '5',
				'time' => date('Y-m-d H:i:s'),
                'title' => $title,
				'source' => $source,
				'province-city' => $province,
                'heading' => $heading,
                'content' => $summernote,
				'author' => $_SESSION['user']['username']
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/Policy');
        }
		echo view('admin/policy/add-policy', $data);
	}
    
	public function edit()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$data['title'] = 'Edit Policy';
		$id = $_GET['id'];
        $getPolicy = new NewModel();
        $Policy = $getPolicy->getById($id);
        $data['Policy'] = $Policy;
        if ($this->request->getMethod() == 'post') {
            $model = new NewModel();
            $title = $this->request->getVar('title');
			$source = $this->request->getVar('source');
			$province = $this->request->getVar('province');
            $heading = $this->request->getVar('heading');
            $summernote = $this->request->getVar('summernote');
            $data_insert = [
                'id' => $id,
				'category_id' => '5',
				'time' => date('Y-m-d H:i:s'),
                'title' => $title,
				'source' => $source,
                'province-city' => $province,
                'heading' => $heading,
                'content' => $summernote,
				'author' => $_SESSION['user']['username']
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/Policy');
        }
        echo view('admin/policy/edit-policy', $data);
	}

	public function delete()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $Policy = new NewModel();
        $Policy->where('id', $id)->delete();
        $data['title'] = 'Policy';
        $data['Policy'] = $Policy->findAll();
        return redirect()->to(base_url() . '/admin/Policy');
    }
}