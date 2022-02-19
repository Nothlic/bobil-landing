<?php

namespace App\Models;

use CodeIgniter\Model;

class InformationModel extends Model
{
    protected $table = 'information';
    protected $useTimestamps = true;
    protected $allowedFields = ['json'];

    public function getData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
