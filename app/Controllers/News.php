<?php

namespace App\Controllers;

class News extends BaseController
{
	public function index()
	{
		return view('client/tin-tuc');
	}
}
