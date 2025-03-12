<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth/login');
    }

    public function processLogin()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->getUserByUsername($username);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Simpan data user ke session
                $sessionData = [
                    'user_id'   => $user['id_user'],
                    'username'  => $user['username'],
                    'role'      => $user['role'], // Ambil role dari database
                    'logged_in' => true
                ];

                $session->set($sessionData);

                // Redirect berdasarkan role
                if ($user['role'] === 'admin') {
                    return redirect()->to('/dashboard/admin');
                } elseif ($user['role'] === 'puskesmas') {
                    return redirect()->to('/dashboard/puskesmas');
                } else {
                    return redirect()->to('/dashboard'); // Redirect default jika role tidak dikenali
                }
            } else {
                return redirect()->back()->with('error', 'Password salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
