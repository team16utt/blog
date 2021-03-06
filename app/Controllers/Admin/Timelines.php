<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TimelineModel;
class Timelines extends BaseController
{
	public function index()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
		$getNews = new TimelineModel();
		$Timeline= $getNews->getAllTimeLine();
		$data['title'] = 'Timelines';
		$data['Timeline'] = $Timeline;
		return view('admin/timeline/All-timelines',$data);
	}

    public function add()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
		$data['title'] = 'Add Timeline';
		if ($this->request->getMethod() == 'post') {
            $model = new TimelineModel();
            $title = $this->request->getVar('title');
            $summernote = $this->request->getVar('summernote');
            $data_insert = [
				'time' => date('Y-m-d H:i:s'),
                'title' => $title,
                'content' => $summernote
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/Timelines');
        }
		echo view('admin/timeline/Add-timelines', $data);
	}

	public function edit()
	{
		session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
		$data['title'] = 'Edit Advice';
		$id = $_GET['id'];
        $getTimelines = new TimelineModel();
        $Timeline = $getTimelines->getById($id);
        $data['Timeline'] = $Timeline;
        if ($this->request->getMethod() == 'post') {
            $model = new TimelineModel();
            $title = $this->request->getVar('title');
            $summernote = $this->request->getVar('summernote');
            $data_insert = [
                'id' => $id,
				'time' => date('Y-m-d H:i:s'),
                'title' => $title,
                'content' => $summernote
            ];
            $model->save($data_insert);
            return redirect()->to(base_url() . '/admin/Timelines');
        }
        echo view('admin/timeline/Edit-timelines', $data);
	}

	public function delete()
    {
        session_start();
        if (empty($_SESSION['user'])) {
            return redirect()->to(base_url() . '/admin/Login');
        }
        $id = $_GET['id'];
        $Timeline = new TimelineModel();
        $Timeline->where('id', $id)->delete();
        $data['title'] = 'Timeline';
        $data['Timeline'] = $Timeline->findAll();
        return redirect()->to(base_url() . '/admin/Timelines');
    }
}