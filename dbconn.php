<?php
try {

$user = "root";
$pass = "";

$conn = new PDO(
			'mysql:host=localhost; dbname=icecast', 
			$user, 
			$pass, 
			array(PDO::ATTR_PERSISTENT => true)
		);
				
} catch (PDOException $e) {

print "Error!: " . $e->getMessage() . "<br/>";
die();

}
