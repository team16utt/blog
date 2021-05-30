<?php namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table = 'video';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','title','time','video','heading', 'content','poster'];

    public function getAllVideo(){
        return $this->orderBy('time','desc')->findAll();
    }

    public function getAllVideoForAdmin() {
        return $this->findAll();
    }
    public function getById($pid)
    {
        return $this->find($pid);
    }

}