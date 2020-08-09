<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

        $data['title'] = "Pages";
        $data['user'] = false;
        $data['css'] = $this->cssJsModel->getCss();
        $data['js'] = $this->cssJsModel->getJs();

        return view('pages', $data);
    }
}
