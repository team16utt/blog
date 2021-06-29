<?php namespace App\Models;

use CodeIgniter\Model;

class NewModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','image','title','time', 'category_id','heading','content','source','author','province-city'];

    public function getAllNews()
    {
        return $this->where('category_id',1)->orderby('time','desc')->findAll();
    }
    public function getNews(int $offset, int $records_per_page)
    {
        return $this->where('category_id',1)->orderby('time','desc')->findAll($records_per_page, $offset);
    }
    public function getCountNews()
    {
        return $this->where('category_id',1)->countAllResults();
    }

    public function getAllDCB()
    {
        return $this->where('category_id',2)->orderby('time','desc')->findAll();
    }
    public function getDCB(int $offset, int $records_per_page)
    {
        return $this->where('category_id',2)->orderby('time','desc')->findAll($records_per_page, $offset);
    }
    public function getCountDCB()
    {
        return $this->where('category_id',2)->countAllResults();
    }

    public function getAllRecommendation()
    {
        return $this->where('category_id',3)->orderby('time','desc')->findAll();
    }
    public function getRecommendation(int $offset, int $records_per_page)
    {
        return $this->where('category_id',3)->orderby('time','desc')->findAll($records_per_page, $offset);
    }
    public function getCountRecommendation()
    {
        return $this->where('category_id',3)->countAllResults();
    }

    public function getAllCDDH()
    {
        return $this->where('category_id',4)->orderby('time','desc')->findAll();
    }
    public function getCDDH(int $offset, int $records_per_page)
    {
        return $this->where('category_id',4)->orderby('time','desc')->findAll($records_per_page, $offset);
    }
    public function getCountCDDH()
    {
        return $this->where('category_id',4)->countAllResults();
    }

    public function getAllCSPCD()
    {
        return $this->where('category_id',5)->orderby('time','desc')->findAll();
    }
    public function getCSPCD(int $offset, int $records_per_page)
    {
        return $this->where('category_id',5)->orderby('time','desc')->findAll($records_per_page, $offset);
    }
    public function getCountCSPCD()
    {
        return $this->where('category_id',5)->countAllResults();
    }

    public function getById(int $id)
    {
        return $this->find($id);
    }

}