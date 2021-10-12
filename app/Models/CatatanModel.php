<?php

namespace App\Models;

use CodeIgniter\Model;

class CatatanModel extends Model
{
    protected $table      = 'catatan';
    public $primaryKey = 'id';
    protected $allowedFields = ['judul', 'isi'];
}
