<?php

namespace App\Controllers;

use App\Models\ModelLogin;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelLogin = new ModelLogin();
    }

    public function index()
    {
        $data = [
            'title' => 'SnapFoodie',
            'sub'   => 'Login',
        ];
        return view('v_login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi.'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi.'
                ]
            ],
        ])) {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek_user = $this->ModelLogin->login_user($username);
            if ($cek_user != '') {
                if (password_verify($password, $cek_user['password'])) {
                    session()->set('nm_user', $cek_user['nm_user']);
                    session()->set('username', $cek_user['username']);
                    session()->set('email', $cek_user['email']);
                    session()->set('phone_num', $cek_user['phone_num']);
                    session()->set('bio', $cek_user['bio']);
                    session()->set('gender', $cek_user['gender']);
                    session()->set('profile_pic', $cek_user['profile_pic']);

                    return redirect()->to(base_url('dashboard'));
                } else {
                    session()->setFlashdata('pesan', 'Gagal Login. Username atau Password yang Anda Masukkan Salah.');
                    return redirect()->to(base_url('login'));
                }
            } else {
                session()->setFlashdata('pesan', 'Gagal Login. Akun Anda Tidak Ditemukan.');
                return redirect()->to(base_url('login'));
            }
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
        }
    }

    public function logout()
    {
        session()->remove(['nm_user', 'username', 'email', 'phone_num', 'bio', 'gender', 'profile_pic']);
    }
}
