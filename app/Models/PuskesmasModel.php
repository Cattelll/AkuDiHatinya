<?php

namespace App\Models;

use CodeIgniter\Model;

class PuskesmasModel extends Model
{
    protected $table = 'puskesmas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_puskesmas', 'alamat', 'kontak'];
}
