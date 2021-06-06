<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NewModel;
use DateTime;

class Advice extends BaseController
{
	public function index()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$getAdvice = new NewModel();
		$Advice= $getAdvice->getAllAdviceForAdmin();
		$data['title'] = 'Advice';
		$data['Advice'] = $Advice;
		return view('admin/advice/all-advice',$data);
	}

    public function add()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$data['title'] = 'Add Advice';
		if ($this->request->getMethod() == 'post') {

            $model = new NewModel();
            $title = $this->request->getVar('title');
			$image = $this->request->getVar('image');
            $heading = $this->request->getVar('heading');
            $summernote = $this->request->getVar('summernote');
            $data_insert = [
				'category_id' => '2',
				'time' => date('Y-m-d H:i:s'),
                'title' => $title,
				'image' => $image,
                'heading' => $heading,
                'content' => $summernote,
				'author' => $_SESSION['user']['username']
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/Advice');
        }
		echo view('admin/advice/add-advice', $data);
	}
    
	public function edit()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$data['title'] = 'Edit Advice';
		$id = $_GET['id'];
        $getAdvice = new NewModel();
        $Advice = $getAdvice->getById($id);
        $data['Advice'] = $Advice;
        if ($this->request->getMethod() == 'post') {
            $model = new NewModel();
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
				'author' => $_SESSION['user']['username']
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/Advice');
        }
        echo view('admin/advice/edit-advice', $data);
	}

	public function delete()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $Advice = new NewModel();
        $Advice->where('id', $id)->delete();
        $data['title'] = 'Advice';
        $data['user'] = $Advice->findAll();
        return redirect()->to(base_url() . '/admin/Advice');
    }
}