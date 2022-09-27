<?php  
	$servername = "localhost";
	$username = "root";
	$serverpass = "";

	try {
		$conn = new PDO("mysql:host=$servername; dbname=tienda",$username,$serverpass);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo "Connected successfully";
	} catch (PDOException $e) {
		echo "Connection failed: ".$e->getMessage();
	}
?>