<?php
class UserSession{

	public function __construct(){
		session_start();
	}

	public function setAdmin($admin){
		$_SESSION['admin']=$admin;
	}

	public function getAdmin(){
		return $_SESSION['admin'];
	}

	public function destroySession(){
		session_unset();
		session_destroy();
	}

}
?>
