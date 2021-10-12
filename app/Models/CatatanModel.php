<?php

namespace App\Models;

use CodeIgniter\Model;

class CatatanModel extends Model
{
    protected $table      = 'catatan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'isi', 'created_at', 'updated_at'];
	protected $useTimestamps = true;
}
