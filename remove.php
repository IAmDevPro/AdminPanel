<?php
 
	//IF isset Session and User = superadmin!
	include_once ('dbconn.php');
	
	$id = 3;//$_GET('id');
	
	$request = "DELETE FROM users WHERE id = '$id'";
	echo $request;
	
	try{
		
		$delete = $conn->exec($request);
		echo"Admin with id $id, was deleted!";
		
	}catch(PDOException $e){
		
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
		
	}