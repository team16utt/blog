<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','email','username','password','fullname', 'phone_number'];

    public function getAllAdmin()
    {
        return $this->findAll();
    }

    public function getById($pid)
    {
        return $this->find($pid);
    }
    
}