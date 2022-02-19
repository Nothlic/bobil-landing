<?php

namespace App\Controllers;

use App\Models\SubscribeModel;

class Email extends BaseController
{
    protected $auth;

    protected $emailModel;

    public function __construct()
    {
        $this->auth = service('authentication');
        $this->emailModel = new SubscribeModel();
    }

    public function index()
    {

        if (!$this->auth->isLoggedIn()) {
            return redirect()->to('login');
        }

        $data = [
            'title' => 'Subscribe',
            'subscribe' => $this->emailModel->getSubscribe()
        ];

        $this->render('email/index', $data);
    }

    protected function render(string $layout, array $data = [])
    {
        echo view('layouts/admin/header', $data);
        echo view($layout, $data);
        echo view('layouts/admin/footer');
    }


    protected function notification(array $data)
    {
        session()->setFlashdata('toastr', $data);
    }
}
