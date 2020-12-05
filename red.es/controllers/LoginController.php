<?php
	
	require 'models/Login.php';

	/**
	 * Clase Controlador Login
	 */
	class LoginController
	{		
		private $model;

		public function __construct()
		{
			$this->model = new Login;
		}

		public function index()
		{
			if(isset($_SESSION['user'])) {
				header('location: ?controller=home');
			
			 } else {
			 		require "views/login.php";
			 }
			
		}

		public function login()
		{
			$validateUser = $this->model->validateUser($_POST);

			if($validateUser === true) {
				header('location: ?controller=home');
				} else {
					$error = [
					'errorMessage' => $validateUser

				];
				require 'views/login.php';
				 }
			
		}
		public function logout()
		{
			if(isset($_SESSION['user'])) {
				session_destroy();
				header('location: ?controller=login');
			 } else {
			 		header('location: ?controller=login');
			 }
		}

	}
	