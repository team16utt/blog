<?php

namespace App\Controllers;

use App\Models\NewModel;

class Chinhsach extends BaseController
{
	public function index()
	{
		$getCSPCDH = new NewModel();
		$CSPCD = $getCSPCDH->getAllCSPCD();
		$data['CSPCD'] = $CSPCD;
		$data['title'] = 'Chính sách phòng chống dịch';
		return view('client/Chinh-sach', $data);
	}
}
