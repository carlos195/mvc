<?php

	require 'sys/request.php';
	class core{

		static function init(){
			//echo 'CORE arrenca app';
			//recuperar la request
				echo $_SERVER['REQUEST_URI'];
				Request::retrieve();
		}
	}