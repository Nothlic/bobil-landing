<?php

namespace App\Models;

use CodeIgniter\Model;

class EmailBlastModel extends Model
{
    protected $table = 'mailblast';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'html', 'design'];

    public function getEmailBlast($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
