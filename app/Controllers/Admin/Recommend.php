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
		return view('admin/recommend/all-recommend',$data);
	}

    public function add()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$data['title'] = 'Add Recommend';
		if ($this->request->getMethod() == 'post') {

            $model = new NewModel();
            $title = $this->request->getVar('title');
			$image = $this->request->getVar('image');
            $heading = $this->request->getVar('heading');
            $summernote = $this->request->getVar('summernote');
            $data_insert = [
				'category_id' => '3',
				'time' => date('Y-m-d H:i:s'),
                'title' => $title,
				'image' => $image,
                'heading' => $heading,
                'content' => $summernote,
				'author' => $_SESSION['user']['username']
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/Recommend');
        }
		echo view('admin/recommend/add-recommend', $data);
	}
	public function edit()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$data['title'] = 'Edit Recommend';
		$id = $_GET['id'];
        $getRecommend = new NewModel();
        $Recommend = $getRecommend->getById($id);
        $data['Recommend'] = $Recommend;
        if ($this->request->getMethod() == 'post') {

            $model = new NewModel();
            $title = $this->request->getVar('title');
			$image = $this->request->getVar('image');
            $heading = $this->request->getVar('heading');
            $summernote = $this->request->getVar('summernote');
            $data_insert = [
                'id' => $id,
				'category_id' => '3',
				'time' => date('Y-m-d H:i:s'),
                'title' => $title,
				'image' => $image,
                'heading' => $heading,
                'content' => $summernote,
				'author' => $_SESSION['user']['username']
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/Recommend');
        }
        echo view('admin/recommend/edit-recommend', $data);
	}
	public function delete()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $Recommend = new NewModel();
        $Recommend->where('id', $id)->delete();
        $data['Recommend'] = 'Recommend';
        $data['Recommend'] = $Recommend->findAll();
        return redirect()->to(base_url() . '/admin/Recommend');
    }
}