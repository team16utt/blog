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

    public function getAllTimelineForAdmin()
    {
        return $this->findAll();
    }
}