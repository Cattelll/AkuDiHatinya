<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class PuskesmasController extends ResourceController
{
    protected $modelName = 'App\Models\PuskesmasModel';
    protected $format = 'json';

    public function index()
    {
        return $this->respond([
            'status' => 200,
            'message' => 'Data puskesmas berhasil diambil',
            'data' => $this->model->findAll()
        ]);
    }
}
