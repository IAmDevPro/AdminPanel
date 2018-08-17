<?php
 
	//IF isset Session and User = superadmin!
	include_once ('dbconn.php');
	
	$name = "NewAdmin2";
	$pass = "123";
	$congregationNum = 1;
	
	//$request = "INSERT INTO users(login, pass, congregation, is_admin) VALUES('$name', '$pass', '$congregationNum', '1')";
	echo $request;
	try{
		
		$insert = $conn->exec($request);
		echo"Admin $name was created!";
		
	}catch(PDOException $e){
		
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
		
	}