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
		return view('admin/admin/all-admin',$data);
	}

    public function add()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
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
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $path = $file->move("./public/admin/account/image/", $newName);
            }


            $url_avatar = "/public/admin/account/image/" . $newName;
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
            return redirect()->to(base_url() . '/admin/admin');
        }
        echo view('admin/admin/add-admin', $data);
	}
	public function edit()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $id = $_GET['id'];
        $model = new UserModel();
        $data['info'] = $model->where('id', $id)->findAll();
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
            if ($file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $path = $file->move("./public/client/assets/product/", $newName);
                    $url_avatar = "/public/client/assets/product/" . $newName;
                } else {
                    $url_avatar = '';
                }
            }
            $data_insert = [
                'id' => $id,
                'image' => $url_avatar,
                'fullname' => $fullname,
                'username' => $username,
                'password' => md5($password),
                'birthday' => date('d/m/Y', strtotime($birthday)),
                'phone_number' => $phone,
                'email' => $email,
                'address' => $address
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/admin');
        }
        echo view('admin/admin/edit', $data);
        //--------------------------------------------------------------------
    }
    public function delete()
    {
        // echo '<script>confirm("Are you the boss?")</script>';
        // die();
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/login');
        }
        $username = $_GET['username'];
        $adminModel = new UserModel();
        $adminModel->where('username', $username)->delete();
        $data['title'] = 'admin';
        $data['user'] = $adminModel->findAll();
        return redirect()->to(base_url() . '/admin/admin');
    }

}