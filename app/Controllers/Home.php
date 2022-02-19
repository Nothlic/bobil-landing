<?php

namespace App\Controllers;

use Jenssegers\Agent\Agent;
use App\Models\SubscribeModel;
use App\Models\InformationModel;
use App\Models\CarModel;


class Home extends BaseController
{

	protected $subscribeModel;
	protected $model;
	protected $cars;

	public function __construct()
	{
		$this->auth = service('authentication');
		$this->subscribeModel = new SubscribeModel();
		$this->model = new InformationModel();
		$this->cars = new CarModel();
	}

	public function welcome()
	{
		$dataModel = $this->model->getData(1);
		$jsonData = json_decode($dataModel['json']);
		$data = [
			'title' => 'Welcome Page',
			'json' => $jsonData
		];
		echo view('welcome', $data);
	}

	public function index()
	{
		$dataModel = $this->model->getData(2);
		$jsonData = json_decode($dataModel['json']);
		$agent = new Agent();
		$data = [
			'agent' => $agent,
			'json' => $jsonData
		];

		echo view('index', $data);
	}

	public function about()
	{
		$dataModel = $this->model->getData(3);
		$jsonData = json_decode($dataModel['json']);
		$agent = new Agent();
		$data = [
			'agent' => $agent,
			'json' => $jsonData
		];
		echo view('about', $data);
	}

	public function collections()
	{
		$dataModel = $this->model->getData(4);
		$cars = $this->cars->getCar();
		$jsonData = json_decode($dataModel['json']);
		$agent = new Agent();
		$data = [
			'agent' => $agent,
			'json' => $jsonData,
			'cars' => $cars
		];
		echo view('collections', $data);
	}

	public function detail($id)
	{
		$cars = $this->cars->getCar($id);

		if (!isset($id) || $cars == null) {
			return redirect()->to('/collections');
		}

		$agent = new Agent();
		$jsonData = json_decode($cars['json']);

		$data = [
			'agent' => $agent,
			'car' => $cars,
			'json' => $jsonData,
		];

		echo view('detail', $data);
	}

	public function station()
	{
		$dataModel = $this->model->getData(5);
		$jsonData = json_decode($dataModel['json']);
		$agent = new Agent();
		$data = [
			'agent' => $agent,
			'json' => $jsonData
		];
		echo view('station', $data);
	}

	public function comingsoon()
	{
		$agent = new Agent();
		$data = [
			'agent' => $agent
		];
		echo view('comingsoon', $data);
	}

	public function subscribe()
	{
		if (!$this->validate([
			'email' => [
				'rules' => 'required[email]|valid_email',
				'errors' => [
					'required' => 'Field is required.',
					'valid_email' => 'Email not valid.'
				]
			],
		])) {
			$notification = [
				'type' => 'warning',
				'title' => 'Warning',
				'msg' => 'Something went wrong, please check again'
			];
			$this->notification($notification);
			return redirect()->to('/station');
		}

		$notification = [
			'type' => 'success',
			'title' => 'Success',
			'msg' => 'We will contact you soon.'
		];


		$this->subscribeModel->save([
			'email' => $this->request->getVar('email'),
		]);

		$this->notification($notification);
		return redirect()->to('/station');
	}


	protected function notification(array $data)
	{
		session()->setFlashdata('toastr', $data);
	}
}
