<?php
	class Token {
		public  function generate_token(){

			$token= rand();

			setcookie("csrf", $token);	


			// return $_SESSION['token'];
		}

		public static function check_token($token){
			if(isset($_COOKIE['csrf']) && $token == $_COOKIE['csrf']){
				// unset($_COOKIE['csrf']);
				return true;
			}
			else{
				return false;
			}
		}
	}
?>