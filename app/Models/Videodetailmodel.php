<?php namespace App\Models;

use CodeIgniter\Model;

class Videodetailmodel extends Model
{
    protected $table = 'video';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','title','time','video','heading', 'content','poster'];

    public function getVideoById(int $id)
    {
        return $this->find($id);
    }
}