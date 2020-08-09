<?php

namespace App\Controllers;

use App\Models\CssJsModel;

class Home extends BaseController
{


	public function index()
	{
		$data['title'] = "Dashboard";
		$data['user'] = false;
		$data['css'] = $this->cssJsModel->getCss();
		$data['js'] = $this->cssJsModel->getJs();
		$data['active'] = true;
		return view('home', $data);
	}
}
