<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();

        // Cek apakah user sudah login
        if (!$session->has('logged_in') || !$session->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu!');
        }

        // Ambil role dari session
        $role = $session->get('role');

        // Redirect berdasarkan role
        if ($role === 'admin') {
            return view('dashboardAdmin');
        } elseif ($role === 'puskesmas') {
            return view('dashboard');
        } else {
            return redirect()->to('/login')->with('error', 'Akses tidak valid!');
        }
    }

    public function admin()
    {
        $session = session();

        if ($session->get('role') !== 'admin') {
            return redirect()->to('/login')->with('error', 'Anda tidak memiliki akses ke halaman ini!');
        }

        // Ambil data user dari session
        $user = $session->get('user');

        // Ambil semua data pengguna dari database
        $usersModel = new UserModel();
        $users = $usersModel->findAll();

        $data = [
            'activePage' => 'dashboardAdmin', // Tambahkan variabel activePage
            'user' => $user,
            'users' => $users,
        ];

        return view('dashboardAdmin', $data);
    }

    public function puskesmas()
    {
        $session = session();

        if ($session->get('role') !== 'puskesmas') {
            return redirect()->to('/login')->with('error', 'Anda tidak memiliki akses ke halaman ini!');
        }

        // Ambil data user
        $user = $session->get('user');

        $data = [
            'activePage' => 'dashboard', // Tambahkan variabel activePage
            'user' => $user,
        ];

        return view('dashboard', $data);
    }
}
