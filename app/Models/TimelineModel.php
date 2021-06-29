<?php namespace App\Models;

use CodeIgniter\Model;

class TimelineModel extends Model
{
    protected $table = 'timeline';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','title','time', 'content'];

    public function getAllTimeLine()
    {
        return $this->orderby('time','desc')->findAll();
    }
    public function getTimeline(int $offset, int $records_per_page)
    {
        return $this->orderby('time','desc')->findAll($records_per_page, $offset);
    }

    public function getById($pid)
    {
        return $this->find($pid);
    }
    public function getCountTimeline()
    {
        return $this->countAllResults();
    }
    public function paginationResult()
    {
        return ;
    }
}