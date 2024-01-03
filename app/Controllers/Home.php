<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'SnapFoodie',
            'sub' => 'Home',
            'isi' => 'v_index'
        ];
        return view('layout/v_wrapper', $data);
    }
}
