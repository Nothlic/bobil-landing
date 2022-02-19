<?php

namespace App\Controllers;

use App\Models\SettingModel;

class Setting extends BaseController
{
    protected $auth;

    protected $model;

    public function __construct()
    {
        $this->auth = service('authentication');
        $this->model = new SettingModel();
    }

    public function index()
    {

        if (!$this->auth->isLoggedIn()) {
            return redirect()->to('login');
        }

        $data = [
            'title' => 'Setting',
            'data' => $this->model->getSetting(1)
        ];

        $this->render('setting/index', $data);
    }

    public function save()
    {
        $id = $this->request->getVar('id');
        $companyName = $this->request->getVar('companyName');
        $address = $this->request->getVar('address');
        $iframeAddress = $this->request->getVar('iframeAddress');
        $phoneNumber = $this->request->getVar('phoneNumber');
        $email = $this->request->getVar('email');
        $twitterLink = $this->request->getVar('twitterLink');
        $facebookLink = $this->request->getVar('facebookLink');
        $instagramLink = $this->request->getVar('instagramLink');
        $whatsappLink = $this->request->getVar('whatsappLink');

        $notification = [
            'type' => 'success',
            'title' => 'Success',
            'msg' => 'You have successfully updated the data'
        ];

        $this->model->save([
            'id' => $id,
            'companyName' => $companyName,
            'address' => $address,
            'iframeAddress' => $iframeAddress,
            'phoneNumber' => $phoneNumber,
            'email' => $email,
            'twitterLink' => $twitterLink,
            'facebookLink' => $facebookLink,
            'instagramLink' => $instagramLink,
            'whatsappLink' => $whatsappLink,
        ]);

        $this->notification($notification);
        return redirect()->to('/setting');
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
