<?php
	try{


	echo '<!--Welcome to the R&D section of THE-WIRE-->'.PHP_EOL;
	include("db-config.php");
	$username = "itssuyog96@gmail.com";
	$pass = "crap";
	      	
	$update = "UPDATE `users` SET `password`=`".$pass."` WHERE `username`=`".$username."`";
	$result = mysqli_query($dbc, $update);
	echo $update;

	    }
catch(PDOException $e)
    {
    echo $update  . "<br>" . $e->getMessage();
    }
?>