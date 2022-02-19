<?php

namespace App\Models;

use CodeIgniter\Model;

class CarModel extends Model
{
    protected $table = 'car';
    protected $useTimestamps = true;
    protected $allowedFields = ['json', 'idBrand'];

    public function getCar($id = false)
    {
        if ($id == false) {
            $db      = \Config\Database::connect();
            $builder = $db->table('car');
            $builder->select('car.*, brand.image');
            $builder->join('brand', 'car.idBrand = brand.id');
            $query = $builder->get();

            return $query->getResult();
        }

        return $this->where(['id' => $id])->first();
    }
}
