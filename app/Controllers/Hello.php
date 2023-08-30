<?php

namespace App\Controllers;

use App\Models\HelloModel;

class Hello extends BaseController
{
    public function index()
    {
        return view('v_index');
    }
    public function say_hello($name)
    {
        $helloModel = new HelloModel();
        $data['name'] = $helloModel->pesan($name);
        return view('v_hello', $data);
    }
}
