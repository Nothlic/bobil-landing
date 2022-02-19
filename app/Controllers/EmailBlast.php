<?php

namespace App\Controllers;

use App\Models\EmailBlastModel;

class EmailBlast extends BaseController
{
    protected $auth;

    protected $emailModel;

    public function __construct()
    {
        $this->auth = service('authentication');
        $this->emailModel = new EmailBlastModel();
    }

    public function index()
    {

        if (!$this->auth->isLoggedIn()) {
            return redirect()->to('login');
        }

        $data = [
            'title' => 'Email Template',
            'mails' => $this->emailModel->getEmailBlast()
        ];

        $this->render('emailblast/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Mail Blast Create',
        ];

        $this->render('emailblast/create', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Mail Blast Editor',
            'mail' =>  $this->emailModel->getEmailBlast($id),
            'isEdit' => true,
            'validation' =>  \Config\Services::validation(),
        ];

        if (empty($data['mail'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Template Tidak Ditemukan');
        }

        $this->render('emailblast/edit', $data);
    }

    public function save()
    {
        $name = $this->request->getVar('name');
        $html = json_encode($this->request->getVar('html'));
        $design = json_encode($this->request->getVar('design'));
        $id = $this->request->getVar('id');
        if (isset($id)) {
            $this->emailModel->save([
                'id' => $id,
                'name' => $name,
                'html' => $html,
                'design' => $design,
            ]);
        } else {
            $this->emailModel->save([
                'name' => $name,
                'html' => $html,
                'design' => $design,
            ]);
        }
    }


    public function delete($id)
    {
        $notification = [
            'type' => 'success',
            'title' => 'Success',
            'msg' => 'You have successfully updated the data'
        ];
        $this->emailModel->delete($id);
        $this->notification($notification);
        return redirect()->to('/emailblast');
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
