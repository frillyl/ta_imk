<?php

namespace App\Controllers;

use App\Models\ModelRegister;

class Register extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('text');
        $this->ModelRegister = new ModelRegister();
    }

    public function index()
    {
        $data = [
            'title' => 'SnapFoodie',
            'sub'   => 'Register',
        ];
        return view('v_register', $data);
    }

    public function add_user()
    {
        if ($this->validate([
            'nm_user' => [
                'label' => 'Full Name',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Required.'
                ]
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[tb_user.username]|max_length[50]',
                'errors' => [
                    'required' => '{field} Required.',
                    'is_unique' => '{field} Already Taken.',
                    'max_length' => '{field} Maximum of 50 Characters.'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|is_unique[tb_user.email]|valid_email',
                'errors' => [
                    'required' => '{field} Required.',
                    'is_unique' => '{field} Already Registered.',
                    'valid_email' => 'Invalid {field} Format.'
                ]
            ],
            'phone_num' => [
                'label' => 'Phone Number',
                'rules' => 'required|is_unique[tb_user.phone_num]|max_length[12]',
                'errors' => [
                    'required' => '{field} Required.',
                    'is_unique' => '{field} Already Registered.',
                    'max_length' => '{field} Maximum of 12 Digits.'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[8]|max_length[25]',
                'errors' => [
                    'required' => '{field} Required.',
                    'min_length' => '{field} Minimum of 8 Characters.',
                    'max_length' => '{field} Maximum of 25 Characters.'
                ]
            ],
            'password_conf' => [
                'label' => 'Confirm Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Required.',
                    'matches' => '{field} do not match.'
                ]
            ]
        ])) {
            $data = [
                'nm_user' => $this->request->getPost('nm_user'),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'phone_num' => $this->request->getPost('phone_num'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            ];
            $this->ModelRegister->add($data);
            session()->setFlashdata('success', 'You have successfully registered.');
            return redirect()->to(base_url('login'));
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('register'));
        }
    }
}
