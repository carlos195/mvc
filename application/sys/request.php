<?php

	class request{
		static private $query = array();

		static function retrieve(){
			$array_query = explode('/',$_SERVER['REQUEST_URI']);
			array_shift($array_query);
			array_pop($array_query);
		}
	}