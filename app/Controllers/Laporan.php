<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Query;

class Laporan extends Controller
{
    public function pHT()
    {
        $db = \Config\Database::connect();

        // Ambil data laporan hipertensi
        $query = $db->table('laporan_hipertensi')
            ->select('laporan_hipertensi.*, pasien.nama_pasien, pasien.id_puskesmas')
            ->join('pasien', 'pasien.id_pasien = laporan_hipertensi.id_pasien')
            ->get();
        $data['laporan_ht'] = $query->getResult();

        // Ambil data pasien untuk dropdown
        $queryPasien = $db->table('pasien')->select('id_pasien, nama_pasien')->get();
        $data['pasien'] = $queryPasien->getResultArray();

        return view('layouts/pemantauanHT', $data);
    }


    public function pDM()
    {
        $db = \Config\Database::connect();

        // Ambil data laporan diabetes
        $query = $db->table('laporan_diabetes')
            ->select('laporan_diabetes.*, pasien.nama_pasien, pasien.id_puskesmas')
            ->join('pasien', 'pasien.id_pasien = laporan_diabetes.id_pasien')
            ->get();
        $data['laporan_dm'] = $query->getResult();

        // Ambil data pasien untuk dropdown
        $queryPasien = $db->table('pasien')->select('id_pasien, nama_pasien')->get();
        $data['pasien'] = $queryPasien->getResultArray();

        return view('layouts/pemantauanDM', $data);
    }
}
