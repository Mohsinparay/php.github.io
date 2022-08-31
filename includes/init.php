<?php 
session_start();
session_regenerate_id(true);
require 'classes/database.php';
require 'classes/user.php';
require 'classes/friend.php';
$db_obj = new Database();
$db_connecton = db_obj->dbConnection();
$user_obj = new User($db_connection);
$fnd_obj = new Friend($ddb_connection);







?>