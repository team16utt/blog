<?php namespace App\Models;

use CodeIgniter\Model;

class NewModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','image','title','time', 'category_id','heading','content'];

    public function getAllNews()
    {
        return $this->where('category_id',1)->orderby('time','desc')->findAll();
    }

    public function getAllDCB()
    {
        return $this->where('category_id',2)->orderby('time','desc')->findAll();
    }

    public function getAllRecommendation()
    {
        return $this->where('category_id',3)->orderby('time','desc')->findAll();
    }
    public function getAllCDDH()
    {
        return $this->where('category_id',4)->orderby('time','desc')->findAll();
    }
    public function getAllCSPCD()
    {
        return $this->where('category_id',5)->orderby('time','desc')->findAll();
    }
}