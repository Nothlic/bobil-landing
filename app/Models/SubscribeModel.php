<?php

namespace App\Models;

use CodeIgniter\Model;

class SubscribeModel extends Model
{
    protected $table = 'subscribe';
    protected $useTimestamps = true;
    protected $allowedFields = ['email'];

    public function getSubscribe($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
