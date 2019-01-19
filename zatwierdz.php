<?php

	session_start();
	
	if (!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}
	
	require_once "baza.php";
	
	$suma = $_SESSION['suma'];
	$log = $_SESSION['log'];
	
	$pol = @new mysqli($host, $db_user, $db_password, $db_name);
	
			if ($pol->connect_errno!=0)
			{
				echo "Error: ".$pol->connect_errno;
				//obsluga bledu polacznia
			}
			else 
			{
				
				@$pol->query("INSERT INTO zamowienie VALUES (NULL,'$suma','$log')");
				
				
				
				$pol->close();
				
				header("Location:owoce.php");
				
			}
			
	
	
?>