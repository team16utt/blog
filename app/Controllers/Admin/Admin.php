<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Admin extends BaseController
{
	public function index()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
		$getAdmin = new UserModel();
		$admin= $getAdmin->getAllAdmin();
		$data['title'] = 'Admin';
		$data['admin'] = $admin;
		return view('admin/admin/All-admin',$data);
	}

    public function add()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
		$data['title'] = 'Add Admin';
		if ($this->request->getMethod() == 'post') {
            $model = new UserModel();
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $fullname = $this->request->getVar('fullname');
            $birthday = $this->request->getVar('birthday');
            $email = $this->request->getVar('email');
            $phone = $this->request->getVar('phone');
            $address = $this->request->getVar('address');
            $file = $this->request->getFile('file');
            $url_avatar = '';
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $path = $file->move("./admin/account/image/", $newName);
            }
            $url_avatar = "http://localhost:8080/blog/public/admin/account/image/" . $newName;
            $data_insert = [
                'image' => $url_avatar,
                'fullname' => $fullname,
                'username' => $username,
                'password' => $password,
                'birthday' => date('Y-m-d', strtotime($birthday)),
                'phone_number' => $phone,
                'email' => $email,
                'address' => $address
            ];
            $model->insert($data_insert);
            return redirect()->to(base_url() . '/admin/Admin');
        }
        echo view('admin/admin/Add-admin', $data);
	}

	public function edit()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
        $id = $_GET['id'];
        $model = new UserModel();
        $user = $model->getById($id);
        $data['user'] = $user;
        $data['title'] = 'Edit Info Admin';
        if ($this->request->getMethod() == 'post') {

            $model = new UserModel();
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
                'birthday' => date('Y/m/d', strtotime($birthday)),
                'phone_number' => $phone,
                'email' => $email,
                'address' => $address
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/Admin');
        }
        echo view('admin/admin/Edit-admin', $data);
    }

    public function delete()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
        $id = $_GET['id'];
        $adminModel = new UserModel();
        $adminModel->where('id', $id)->delete();
        $data['title'] = 'admin';
        $data['user'] = $adminModel->findAll();
        return redirect()->to(base_url() . '/admin/Admin');
    }

}