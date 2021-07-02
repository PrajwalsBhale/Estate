<?php

namespace App\Controllers;

use App\Libraries\Hash;

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

	public function property()
	{
		return view('property_grid');
	}
	public function blog()
	{
		return view('blog');
	}
	public function property_single()
	{
		return view('property_single');
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

	public function post_property()
	{
		return view('post_property');
	}


	public function register()
	{
		return view('register');
	}
	public function save_user()
	{

		//Let's validate the register form

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


	public function login()
	{
		return view('login');
	}
	public function check()
	{
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




	// public function show_property($id)
	// {

	// 	$model = new PropertyModel();

	// 	$data = [
	// 		'get_property' =>  $model->get_property($id)
	// 	];

	// 	echo view('single', $data);
	// }



}
