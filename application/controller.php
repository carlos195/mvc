<?php

	class controller{
		public $load;
		public $model;

		function __construct(){
			$this -> load = new load();
			$this -> model = new model();

			$this -> home();
		}

		function home(){
			$data = $this -> model -> user_info();
			echo $this -> load -> view('vista.php', $data);
		}
	}