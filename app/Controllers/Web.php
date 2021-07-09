<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\PropertyModel;

class Web extends BaseController
{

	public function __construct()
	{

		helper(['form', 'url', 'array', 'text', 'number']);
	}
	public function index()
	{
		return view('home');
	}
	public function about()
	{
		return view('about');
	}

	public function blog()
	{
		return view('blog');
	}
	public function agents_grid()
	{
		return view('agents_grid');
	}
	public function agents_single()
	{
		return view('agents_single');
	}
	public function contact()
	{
		return view('contact');
	}
	public function property()
	{
		$db = db_connect();
		$model = new PropertyModel($db);
		$data = [

			'users' => $model->select('*')->join('users', 'property.user_id = users.user_id')->paginate(6),
			'pager' => $model->pager,

		];
		return view('property_grid', $data);
	}

	public function property_single($id)
	{

		$model = new PropertyModel();
		$data['result'] = $model->getPropertySingle($id);

		return view('property_single', $data);
	}

	public function profile()
	{
		$data = [];
		$ses = session();
		$db = db_connect();
		$model = new PropertyModel($db);
		$id = $ses->get('id');

		$data['profile_data'] = $ses;
		$data['result'] = $model->getProperty($id);

		return view('profile', $data);
	}

	public function post_property()
	{
		if ($this->request->getMethod() == 'post') {
			// let's start validation
			$validation = $this->validate([
				'title' => 'required|min_length[4]|max_length[100]',
				'description' => 'required|min_length[6]',
				'address' => 'required|min_length[6]',
				'city' => 'required',
				'state' => 'required',
				'country' => 'required',
				'zipcode' => 'required|numeric',
				'property_type' => 'required|min_length[4]|max_length[32]',
				'property_status' => 'required|min_length[4]|max_length[32]',
				'price' => 'required|numeric',
				'features' => 'required',
				'image' => 'uploaded[image]|max_size[image,2048]|mime_in[image,image/png,image/jpg,image/jpeg]',
				'areasize' => 'required|min_length[3]|max_length[50]',
				'bed' => 'required|numeric|max_length[5]',
				'bath' => 'required|numeric|max_length[5]',
				'garage' => 'required|numeric|max_length[5]',
			]);

			if (!$validation) {
				return view('post_property', ['validation' => $this->validator]);
			} else {
				//let's insert user data into database
				$title = $this->request->getPost('title');
				$description = $this->request->getPost('description');
				$address = $this->request->getPost('address');
				$city = $this->request->getPost('city');
				$state = $this->request->getPost('state');
				$country = $this->request->getPost('country');
				$zipcode = $this->request->getPost('zipcode');
				$property_type = $this->request->getPost('property_type');
				$property_status = $this->request->getPost('property_status');
				$price = $this->request->getPost('price');
				$features = $this->request->getPost('features');
				$image = $this->request->getFile('image');

				if ($image->isValid() && !$image->hasMoved()) {
					$originalName = $image->getClientName();
					$image->move('public/uploads/', $originalName);
				}
				$areasize = $this->request->getPost('areasize');
				$bed = $this->request->getPost('bed');
				$bath = $this->request->getPost('bath');
				$garage = $this->request->getPost('garage');
				$user_posted_id = session()->get('id');


				$values =  [
					'property_title' => $title,
					'property_description' => $description,
					'property_address' => $address,
					'property_city' => $city,
					'property_state' => $state,
					'property_country' => $country,
					'property_zipcode' => $zipcode,
					'property_type' => $property_type,
					'property_status' => $property_status,
					'property_price' => $price,
					'property_features' => $features,
					'property_image' => $originalName,
					'property_areasize' => $areasize,
					'property_bedrooms' => $bed,
					'property_bathrooms' => $bath,
					'property_garages' => $garage,
					'user_id' => $user_posted_id,


				];
				$PropertyModel = new \App\Models\PropertyModel();
				$query = $PropertyModel->insert($values);
				if (!$query) {
					return redirect()->back()->with('fail', 'Something Went Wrong');
				} else {
					return redirect()->to('/PostProperty')->with('success', 'Property Posted Successfully');
				}
			}
		}
		return view('post_property');
	}


	public function register()
	{
		if ($this->request->getMethod() == 'post') {
			// let's start validation

			$validation = $this->validate([
				'firstname' => 'required|min_length[3]|max_length[50]',
				'lastname' => 'required|min_length[3]|max_length[50]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
				'contact' => 'required|numeric',
				'username' => 'required|min_length[8]|max_length[32]|is_unique[users.user_username]',
				'password' => 'required|min_length[8]|max_length[32]',
				'password_confirm' => 'matches[password]',

			]);



			if (!$validation) {
				return view('register', ['validation' => $this->validator]);
			} else {
				//let's insert user data into database
				$firstname = $this->request->getPost('firstname');
				$lastname = $this->request->getPost('lastname');
				$email = $this->request->getPost('email');
				$contact = $this->request->getPost('contact');
				$username = $this->request->getPost('username');
				$password = $this->request->getPost('password');

				$values =  [
					'user_firstname' => $firstname,
					'user_lastname' => $lastname,
					'user_email' => $email,
					'user_contact' => $contact,
					'user_username' => $username,
					'user_password' => Hash::make($password),

				];

				$UserModel = new \App\Models\UserModel();
				$query = $UserModel->insert($values);

				if (!$query) {
					return redirect()->back()->with('fail', 'Something Went Wrong');
				} else {

					return redirect()->to('/register')->with('success', 'You are now successfully registered');
				}
			}
		}
		return view('register');
	}

	public function login()
	{
		if ($this->request->getMethod() == 'post') {
			// let's start validation
			$validation = $this->validate([
				'username' => [
					'rules' => 'required|min_length[8]|max_length[32]|is_not_unique[users.user_username]',
					'errors' => [
						'is_not_unique' => 'This username is not registered'
					]
				],
				'password' => 'required|min_length[8]|max_length[32]',

			]);

			if (!$validation) {
				return view('login', ['validation' => $this->validator]);
			} else {
				//let's check user

				$username = $this->request->getPost('username');
				$password = $this->request->getPost('password');

				$UserModel = new \App\Models\UserModel();
				$user = $UserModel->where('user_username', $username)->first();
				$check_password = Hash::check($password, $user['user_password']);

				if (!$check_password) {
					session()->setFlashdata('fail', ' Incorrect Password');
					return redirect()->to('/login')->withInput();
				} else {

					$this->setUserSession($user);
					return redirect()->to('/');
				}
			}
		}

		return view('login');
	}

	private function setUserSession($user)
	{
		$data = [
			'id' => $user['user_id'],
			'firstname' => $user['user_firstname'],
			'lastname' => $user['user_lastname'],
			'email' => $user['user_email'],
			'contact' => $user['user_contact'],
			'username' => $user['user_username'],

			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

	public function logout()
	{

		session()->destroy();
		return redirect()->to('/');
	}
}
