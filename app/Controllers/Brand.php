<?php

namespace App\Controllers;

use App\Models\BrandModel;

class Brand extends BaseController
{
    protected $auth;

    protected $brandModel;

    public function __construct()
    {
        $this->auth = service('authentication');
        $this->brandModel = new BrandModel();
    }

    public function index()
    {

        if (!$this->auth->isLoggedIn()) {
            return redirect()->to('login');
        }

        $data = [
            'title' => 'Brand',
            'brands' => $this->brandModel->getBrand()
        ];

        $this->render('brand/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create Brand',
            'validation' =>  \Config\Services::validation(),
            'isEdit' => false,
        ];

        $this->render('brand/form', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Brand',
            'brand' =>  $this->brandModel->getBrand($id),
            'isEdit' => true,
            'validation' =>  \Config\Services::validation(),
        ];

        if (empty($data['brand'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Brand Tidak Ditemukan');
        }

        $this->render('brand/form', $data);
    }

    public function save()
    {
        $id = $this->request->getVar('id');

        $notification = [
            'type' => 'success',
            'title' => 'Success',
            'msg' => 'You have successfully updated the data'
        ];

        if (!$this->validate([
            'name' => [
                'rules' => 'required[name]',
                'errors' => [
                    'required' => 'Field is required.',
                ]
            ],
        ])) {
            $notification = [
                'type' => 'warning',
                'title' => 'Warning',
                'msg' => 'Something went wrong, please check again'
            ];
            $this->notification($notification);

            if (isset($id)) {
                return redirect()->to('/brand/' . $id)->withInput();
            }

            return redirect()->to('/brand/create')->withInput();
        }

        $file = $this->request->getFile('image');
        $oldFile = $this->request->getVar('oldImage');

        if ($file->getError() == 4) {
            if ($oldFile == 'default.jpg') {
                $fileName = 'default.jpg';
            } else {
                $fileName = $oldFile;
            }
        } else {
            $fileName = $file->getRandomName();
            $file->move('upload', $fileName);
        }

        if (!isset($id)) {
            $this->brandModel->save([
                'name' => $this->request->getVar('name'),
                'image' => $fileName,
            ]);

            $this->notification($notification);
            return redirect()->to('/brand');
        }

        $this->brandModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'image' => $fileName,
        ]);

        $this->notification($notification);
        return redirect()->to('/brand');
    }

    public function delete($id)
    {
        $notification = [
            'type' => 'success',
            'title' => 'Success',
            'msg' => 'You have successfully updated the data'
        ];
        $brand = $this->brandModel->find($id);

        if ($brand['image'] != 'default.jpg') {
            unlink('img/' . $brand['image']);
        }

        $this->brandModel->delete($id);
        $this->notification($notification);
        return redirect()->to('/brand');
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
