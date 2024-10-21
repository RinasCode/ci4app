<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper(['form', 'url']);
    }

    public function login()
    {
        $session = session();

        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Cek apakah user ada di database
            $user = $this->userModel->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                $session->set('isLoggedIn', true);
                return redirect()->to('/home');
            } else {
                $session->setFlashdata('error', 'Username atau password salah.');
                return redirect()->back();
            }
        }

        return view('users/login', ['title' => 'Login | Komik Apps']);
    }

    public function register()
    {
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

            // Simpan user baru ke database
            $this->userModel->save([
                'username' => $username,
                'password' => $password
            ]);

            session()->setFlashdata('success', 'Registrasi berhasil! Silakan login.');
            return redirect()->to('/');
        }

        return view('users/register', ['title' => 'Register | Komik Apps']);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Logout berhasil!');
    }
    
}
