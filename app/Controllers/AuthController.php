<?php

namespace App\Controllers;

use App\Models\ModelUser;
use CodeIgniter\Controller;

class AuthController extends BaseController
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerUser()
    {
        $model = new ModelUser();
        
        // Validasi input form
        $validationRules = [
            'email'    => 'required|valid_email|is_unique[user.email]',
            'username' => 'required',
            'password' => 'required|min_length[6]'
        ];
        
        if (!$this->validate($validationRules)) {
            // Ambil pesan validasi
            $validation = \Config\Services::validation();
            // Jika validasi gagal, redirect ke halaman error dengan pesan error
            return redirect()->to('auth/error')->with('validation', $validation);
        }

        $data = [
            'email'    => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'level'    => 'user' // Sesuaikan level sesuai kebutuhan
        ];
        
        $model->Tambah($data);
        
        return redirect()->to('auth/login')->with('success', 'Registration successful. Please login.');
    }

    public function error()
    {
        // Menampilkan halaman error dengan pesan validasi
        $validation = session()->getFlashdata('validation');
        return view('auth/error', ['validation' => $validation]);
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginUser()
    {
        $model = new ModelUser();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->getUserByEmail($email);

        // Cek apakah user ditemukan
        if ($user && password_verify($password, $user['password'])) {
            // Set session
            session()->set([
                'username'   => $user['username'],
                'email'      => $user['email'],
                'isLoggedIn' => true,
                'level'      => $user['level']
            ]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid login credentials.');
        }
    }

    public function logout()
    {
        // Hapus session
        session()->destroy();
        return redirect()->to('auth/login')->with('success', 'Logout successful.');
    }
}
