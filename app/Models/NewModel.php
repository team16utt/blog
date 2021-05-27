<?php namespace App\Models;

use CodeIgniter\Model;

class NewModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','image','title','time', 'category_id','heading','content'];

    public function getAllNews()
    {
        return $this->where('category_id',1)->findAll();
    }

    public function getAllDCB()
    {
        return $this->where('category_id',2)->findAll();
    }

    public function getAllRecommandation()
    {
        return $this->where('category_id',3)->findAll();
    }
}