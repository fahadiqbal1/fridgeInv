<?php
$output = '';

	if(isset($_POST['inputUsername'])){
		$usr = $_POST['inputUsername'];
	}
	if(isset($_POST['inputPassword'])){
		$pwd = $_POST['inputPassword'];
	}

	$pwdLen = strlen($pwd);
	if($pwdLen < 8){
		$output = "Password needs to be more than 8 characters";
	}
	else{
		$output = "signing in...";
		header("location:google.com");
	}

echo $output;