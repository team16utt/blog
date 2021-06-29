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
    public function getVideo(int $offset, int $records_per_page)
    {
        return $this->orderby('time','desc')->findAll($records_per_page, $offset);
    }
    public function getCountVideo()
    {
        return $this->countAllResults();
    }
    public function getVideoById(int $id)
    {
        return $this->find($id);
    }

}