<?php

namespace App\Controllers;

class Posts extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'SnapFoodie',
            'sub'   => 'Create New Post',
            'isi'   => 'v_create'
        ];
        return view('layout/v_wrapper', $data);
    }
}
