<?php
	include('../includes/db_conn.php');
	$output = '';

	if(isset($_POST['inputFirst'])){
		$fName = $_POST['inputFirst'];
	}
	if(isset($_POST['inputLast'])){
		$lName = $_POST['inputLast'];
	}
	if(isset($_POST['inputEmail'])){
		$email = $_POST['inputEmail'];
	}
	if(isset($_POST['inputPass'])){
		$pass = $_POST['inputPass'];
	}
	if(isset($_POST['inputUser'])){
		$user = $_POST['inputUser'];
	}

	function lenCheck($checkVar){
		return strlen($checkVar);
	}

	if(lenCheck($pass) < 8){
		$output = "Password needs to be at least 8 characters";
	}
	elseif(lenCheck($user) < 2){
		$output = "Username needs to be more than 2 characters";
	}



	echo $output;