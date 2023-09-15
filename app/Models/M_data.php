<?php

namespace App\Models;

use CodeIgniter\Model;

class M_data extends Model
{
    public function __construct() 
    {
        $this->db = db_connect();
    }

    public function getAllData () 
    {
        return  $this->db->table('Tb_unit')->get()->getResultArray();
    }
}