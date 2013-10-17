<?php
include_once ('_password.php');
include_once __DIR__ . '../../Models/Users.php';
include_once __DIR__ . '../../Models/Items.php';
function GetConnection() {
	global $sql_password;
	$conn = new mysqli('localhost', 'n02207313', $sql_password, 'n02207313_db');
	return $conn;

}
