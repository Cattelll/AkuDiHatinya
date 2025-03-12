<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Sesuai dengan migration
    protected $primaryKey = 'id_user';

    protected $allowedFields = ['nama', 'username', 'password', 'role', 'id_puskesmas'];

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
