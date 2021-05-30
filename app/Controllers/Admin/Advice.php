<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NewModel;
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
		return view('admin/advice/add-advice', $data);
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
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $fullname = $this->request->getVar('fullname');
            $birthday = $this->request->getVar('birthday');
            $email = $this->request->getVar('email');
            $phone = $this->request->getVar('phone');
            $address = $this->request->getVar('address');
            $file = $this->request->getFile('file');
            $url_avatar = '';
            if ($file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $path = $file->move("./admin/account/image/", $newName);
                    $url_avatar = "http://localhost:8080/blog/public/admin/account/image/" . $newName;
                } else {
                    $url_avatar = '';
                }
            }
            $data_insert = [
                'id' => $id,
                'image' => $url_avatar,
                'fullname' => $fullname,
                'username' => $username,
                'password' => $password,
                'birthday' => date('d/m/Y', strtotime($birthday)),
                'phone_number' => $phone,
                'email' => $email,
                'address' => $address
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/admin');
        }
        echo view('admin/advice/edit-advice', $data);
	}
}