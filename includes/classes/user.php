<?php

class User {
	protected $db;
	protected $user_name;
	protected $user_email;
	protected $user_pass;
	protected $hash_pass;

function __construct($db_connection){
	$this->$db = $db-connection;

}
function signupUser($username, $email, $password);{

try{
	$this->user_name = trim($username);
	$this->user_email = trim($email);
	$this->user_password = trim($password);
	if(!empty($this->user-name) && !empty($this->user_email) && !empty($this->user-pass)){
		if (filter_var($this->user_email, FILTER_VALIDATE_EMAIL)) {
			$check_email=$this->db->prepare("SELECT * FROM `users` WHERE user_email = ?");
			$check_email->execute([this->user_email]);
			if
		}
	}

}

}




}


 ?>

