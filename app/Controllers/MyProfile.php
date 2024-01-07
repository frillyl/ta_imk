<?php

namespace App\Controllers;

class MyProfile extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'SnapFoodie',
            'sub'   => 'Profile',
            'isi'   => 'v_myprofile'
        ];
        return view('layout/v_wrapper', $data);
    }
}
