<?php

if(isset($_POST["username"]) && isset($_POST["password"])){
	$username = $_POST["username"];
	$password = $_POST["password"];
	if($username == 'user' && $password == '123'){
		header("location: ../user");
	}
	 else {
        header('location: ../home/login?err=1');
        exit();
    }
}

?>