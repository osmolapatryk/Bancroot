<?php

	session_start();
	
	if ((!isset($_POST['log'])) || (!isset($_POST['pass'])))
	{
		header('Location: start.php');
		exit();
	}
	
	
	require_once "baza.php";
	
	$pol = @new mysqli($host, $db_user, $db_password, $db_name); 
	
	if ($pol->connect_errno!=0)
	{
		echo "Error: ".$pol->connect_errno;
		//obsluga bledu polacznia
	}
	else 
	{

		$log = $_POST['log'];   // lapanie postem danych z formularza
		$pass = $_POST['pass'];
		
		$log = htmlentities($log, ENT_QUOTES, "UTF-8");
		
		if ($rezult = @$pol->query(
		sprintf("SELECT * FROM uzytkownicy WHERE log='%s'",
		mysqli_real_escape_string($pol,$log))))
		{
			$ile_userow = $rezult->num_rows;
			if($ile_userow>0)
			{
			
				$linia = $rezult->fetch_assoc();
				
				if(password_verify($pass,$linia['pass']))
					
				{
					
					$_SESSION['logged'] = true;
					
					 
					
					
					$_SESSION['log'] = $linia['log']; 
					$_SESSION['mail'] = $linia['mail'];
					
					
					unset($_SESSION['err']);
					$rezult->free_result();
					
					if($_SESSION['log'] == "Administrator")
					{
						header('Location:admin.php');
					}
					else
					{
					header('Location:start.php');
					}
				}
				else
				{
					$_SESSION['err'] ="Nieprawidłowy login lub hasło!";
					header('Location:start.php');
				
				}
			}			
			else
			{
				$_SESSION['err'] = "Nieprawidłowy login lub hasło!";
				header('Location:start.php');
				//echo "Nie znalazło goscia o takim loginie".$log;
			}
		
		}
		$pol->close();
	}
?>
	