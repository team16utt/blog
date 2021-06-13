<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class profile extends BaseController
{
    public function index()
    {
        session_start();
        if(empty($_SESSION['user'])){
            return redirect()->to(base_url().'/admin/Login');
        }
        $id = $_GET['id'];
        $adminModel = new UserModel();
        $user = $adminModel->find($id);
        $data['title'] = 'Profile';
        $data['user'] = $user;
        echo view('admin/admin/Profile', $data);
    }
}