<?php

if(isset($_POST["username"]) && isset($_POST["password"])){
	$username = $_POST["username"];
	$password = $_POST["password"];
	if($username == 'user' && $password == '123'){
		header("location: ../user");
	}
	 else {
        header('location: login.php?error='.base64_encode('Username dan Password Invalid!!!'));
        exit();
    }
}

?>