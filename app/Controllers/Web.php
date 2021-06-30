<?php

namespace App\Controllers;

use App\Models\PropertyModel;

class Web extends BaseController
{
	
		public function __construct()
		{
	
			helper(['form', 'html', 'array', 'test', 'text', 'number']);
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
	public function login()
	{
		return view('login');
	}
	public function register()
	{
		return view('register');
	}
  public function post_property()
	{
		return view('post_property');
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
