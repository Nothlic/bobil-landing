<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingModel extends Model
{
    protected $table = 'setting';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'companyName',
        'address',
        'iframeAddress',
        'phoneNumber',
        'email',
        'twitterLink',
        'facebookLink',
        'instagramLink',
        'whatsappLink'
    ];


    public function getSetting($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
