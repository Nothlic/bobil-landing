<?php

namespace App\Controllers;

class Admin extends BaseController
{

    protected $auth;

    public function __construct()
    {
        $this->auth = service('authentication');
    }


    public function index()
    {
        if (!$this->auth->isLoggedIn()) {
            return redirect()->to('login');
        }

        $data = [
            'title' => 'Welcome Admin',
        ];
        $this->render('admin/index', $data);
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
