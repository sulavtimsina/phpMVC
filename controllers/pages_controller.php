<?php
	class PagesController{
		public function home(){
			$first_name = 'Sulav';
			$last_name = 'Timsina';
			require_once('views/pages/home.php');
		}

		public function error(){
			require_once('views/pages/error.php');
		}
	}
 ?>