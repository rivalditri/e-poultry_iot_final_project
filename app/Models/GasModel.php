<?php

namespace App\Models;

use CodeIgniter\Model;

class GasModel extends Model
{
    protected $table            = 'gas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'data', 'alert', 'waktu'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getGases()
    {
        $query = $this->db->query("SELECT * FROM gas order by id desc limit 10");
        return $query->getResultArray();
    }

    public function getGas()
    {
        $query = $this->db->query("SELECT * FROM gas order by id desc limit 1");
        return $query->getRow();
    }
}
