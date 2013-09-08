<?php
	include('../includes/db_conn.php');
	$output = '';

	if(isset($_POST['inputFirst'])){
		$fName = sanitise($_POST['inputFirst']);
	}
	if(isset($_POST['inputLast'])){
		$lName = sanitise($_POST['inputLast']);
	}
	if(isset($_POST['inputEmail'])){
		$email = sanitise($_POST['inputEmail']);
	}
	if(isset($_POST['inputPass'])){
		$pass = sanitise($_POST['inputPass']);
	}
	if(isset($_POST['inputUser'])){
		$user = sanitise($_POST['inputUser']);
	}

	function lenCheck($checkVar){
		return strlen($checkVar);
	}
	function sanitise($string){
		$string = strip_tags($string); // Remove HTML
		$string = htmlspecialchars($string); // Convert characters
		$string = trim(rtrim(ltrim($string))); // Remove spaces
		$string = mysqli_real_escape_string($string); // Prevent SQL Injection
		return $string;
	}

	if(lenCheck($pass) < 8){
		$output = "Password needs to be at least 8 characters";
	}
	elseif(lenCheck($user) < 2){
		$output = "Username needs to be more than 2 characters";
	}
	else{
		$pass = md5($pass);
		$sql = "INSERT INTO `db_fi_learn`.`fridInv.tblUsers` (`userId` ,`userName` ,`password` ,`firstName` ,`lastName` ,`email` ,`createdDtTm`)
				VALUES (NULL , '".$user."', '".$pass."', '".$fName."', '".$lName."', '".$email."',CURRENT_TIMESTAMP);";
		mysqli_query($con,$sql) or die ($output = mysqli_error());
		$output = "User created.";
	}



	echo $output;