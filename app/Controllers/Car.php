<?php

namespace App\Controllers;

use App\Models\CarModel;
use App\Models\BrandModel;
use \stdClass;

class Car extends BaseController
{
    protected $auth;

    protected $model;

    protected $brandModel;

    public function __construct()
    {
        $this->auth = service('authentication');
        $this->model = new CarModel();
        $this->brandModel = new BrandModel();
    }

    public function index()
    {

        if (!$this->auth->isLoggedIn()) {
            return redirect()->to('login');
        }

        $data = [
            'title' => 'List Car',
            'cars' => $this->model->getCar()
        ];

        $this->render('car/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Car',
            'validation' =>  \Config\Services::validation(),
            'brands' => $this->brandModel->getBrand()
        ];

        $this->render('car/form', $data);
    }

    public function edit($id)
    {
        $dataModel = $this->model->getCar($id);
        $json = json_decode($dataModel['json']);

        $data = [
            'title' => 'Edit Car',
            'car' =>  $this->model->getCar($id),
            'data' => $json,
            'isEdit' => true,
            'validation' =>  \Config\Services::validation(),
            'brands' => $this->brandModel->getBrand()
        ];

        if (empty($data['car'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Car Tidak Ditemukan');
        }

        $this->render('car/form', $data);
    }

    public function save()
    {
        $input = $this->request->getPost();
        $id = $this->request->getVar('id');
        $oldImages = $this->request->getVar('oldImages');
        $idBrand = $this->request->getVar('idBrand');
        $files = $this->request->getFileMultiple('image');
        $jsonInput = new stdClass();

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
                return redirect()->to('/car/edit/' . $id)->withInput();
            }

            return redirect()->to('/car/create')->withInput();
        }

        $images = [];
        if (count($files) <= 1 && $files[0]->getError() == 4) {
            $images = $oldImages;
            $dataModel = $this->model->getCar($id);
            $json = json_decode($dataModel['json']);
            $images = $json->images;
        } else {
            foreach ($files as $file) {
                $fileName = $file->getRandomName();
                $file->move('upload/car/', $fileName);
                array_push($images, $fileName);
            }
        }



        $jsonInput->name = $input['name'];
        $jsonInput->year = $input['year'];
        $jsonInput->price = $input['price'];
        $jsonInput->description = $input['description'];
        $jsonInput->exterior = $input['exterior'];
        $jsonInput->interior = $input['interior'];
        $jsonInput->images = $images;
        $json = json_encode($jsonInput);


        if (!isset($id)) {
            $this->model->save([
                'idBrand' => $idBrand,
                'json' => $json,
            ]);

            $this->notification($notification);
            return redirect()->to('/car');
        }

        $this->model->save([
            'id' => $id,
            'idBrand' => $idBrand,
            'json' => $json,
        ]);

        $this->notification($notification);
        return redirect()->to('/car');
    }

    public function delete($id)
    {
        $notification = [
            'type' => 'success',
            'title' => 'Success',
            'msg' => 'You have successfully updated the data'
        ];
        $car = $this->model->find($id);

        if ($car['image'] != 'default.jpg') {
            unlink('img/' . $car['image']);
        }

        $this->model->delete($id);
        $this->notification($notification);
        return redirect()->to('/car');
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
