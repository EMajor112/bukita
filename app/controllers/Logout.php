<?php

class Logout extends Controller {
	public function index()
	{
		$data['title'] = 'Halaman Login';

		$this->view('login/login', $data);
	}
	
	public function Logout(){
		session_start();
		session_destroy();
		header('location: '. base_url . '/login');
	}
}