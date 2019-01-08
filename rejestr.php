<?php
	session_start();
	
	if(isset($_POST['mail']))
	{
		$_OK=true;
		
		$log = $_POST['log'];
		
		//dlugosc loginu 
		if((strlen($log)<3) || (strlen($log)>20))
		{
			$_OK=false;
			$_SESSION['e_log']="Login musi zawierać od 3 do 20 znaków!";
		}
		
		if(ctype_alnum($log)==false)
		{
			$_OK=false;
			$_SESSION['e_log']="Nick może składać się tylko z cyfr i liter bez polskich znaków!";
		}
		
		$mail=$_POST['mail'];
		$mailB=filter_var($mail,FILTER_SANITIZE_EMAIL);
		
		if((filter_var($mailB,FILTER_VALIDATE_EMAIL)==false) || ($mailB!=$mail))
		{
			$_OK=false;
			$_SESSION['e_mail']="Podaj poprawny email!";
		}
		
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];
		
		if((strlen($pass1)<5) || (strlen($pass1)>20))
		{
			$_OK=false;
			$_SESSION['e_pass']="Hasło musi zawierać od 5 do 20 znaków!";
		}
		
		if($pass1!=$pass2)
		{
			$_OK=false;
			$_SESSION['e_pass']="Hasła nie są identyczne!";
		}
		
		$pass_hash = password_hash($pass1,PASSWORD_DEFAULT);
		
		require_once "baza.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try
		{
			$pol = new mysqli($host, $db_user, $db_password, $db_name);
			if ($pol->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy email już istnieje?
				$rezult = $pol->query("SELECT id_uzytkownika FROM uzytkownicy WHERE mail='$mail'");
				
				if (!$rezult) throw new Exception($pol->error);
				
				$ile_maili = $rezult->num_rows;
				if($ile_maili>0)
					{
						$_OK=false;
						$_SESSION['e_mail']="Istnieje już konto przypisane do tego adresu e-mail!";
					}	
				
				//Czy nick jest już zarezerwowany?
				$rezult = $pol->query("SELECT id_uzytkownika FROM uzytkownicy WHERE log='$log'");
				
				if (!$rezult) throw new Exception($pol->error);
				
				$ile_loginow = $rezult->num_rows;
				if($ile_loginow>0)
				{
					$_OK=false;
					$_SESSION['e_log']="Istnieje już użytkownik o takim loginie! Wybierz inny.";
				}
				
				if($_OK==true)
				{
					//wszystko dziala dodajemy goscia do bazy
					if ($pol->query("INSERT INTO uzytkownicy VALUES (NULL, '$log', '$pass_hash', '$mail')"))
					{
						$_SESSION['all_ok']=true;
						header('Location:start.php');
					}
					else
					{
						throw new Exception($pol->error);
					}
					
				}
				
				
				
				$pol->close();
			
			}	
		}
		catch(Exception $e)
		{
			echo "Błąd servera! Wróć później!";
			echo '<br/>Info Developera: '.$e;
		}
		
		
	}


?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title></title>
	
	<meta name="description" content="Sklep internetowy bancroot" />
	<meta name="keywords" content="sklep,internetowy, zakupy, online,projekt ,zaliczenie, css, html," />
	<link rel="stylesheet" href = "style.css" type = "text/css" />
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;subset=latin-ext" rel="stylesheet">
	
</head>

<body>

	<div id = "container" >
		<div id = "logo" >
			<div id="topbar">
				<div id="topbarL">
					<img src = "img/logo.png" style="margin-left:20px;"> </img> 
				</div>
				<div id="topbarR">
					 Witaj w Bancroot! 
				</div>
				<div style="clear:both;"></div>			
			</div>
		</div>
		
	
	
	<div id = "content">
	
			<div id = "log" >
					<form method = "post" style = "margin-top:-70px;"> </br></br>
					
						<text id="title" > Rejestracja </text> </br></br>
							
						<input type = "text" name = "log" class="form" placeholder="Login" onfocus ="this.placeholder=''" onblur = "this.placeholder='Login'" /> </br>
						
						<?php
							if(isset($_SESSION['e_log']))
							{
								echo '<div class = "error">'.$_SESSION['e_log'].'</div>';
								unset($_SESSION['e_log']);
								
							}
						?>
						
						<input type = "password" name = "pass1" class="form" placeholder="Hasło" onfocus ="this.placeholder=''" onblur = "this.placeholder='Password'" /> </br>
						
						<?php
							if(isset($_SESSION['e_pass']))
							{
								echo '<div class = "error">'.$_SESSION['e_pass'].'</div>';
								unset($_SESSION['e_pass']);
								
							}
						?>
						
						<input type = "password" name = "pass2" class="form" placeholder="Powtórz hasło" onfocus ="this.placeholder=''" onblur = "this.placeholder='Password'" /> </br>
						
						<input type = "email" name = "mail" class="form" placeholder="E-mail" onfocus ="this.placeholder=''" onblur = "this.placeholder='E-mail'"  /></br>
						
						<?php
							if(isset($_SESSION['e_mail']))
							{
								echo '<div class = "error">'.$_SESSION['e_mail'].'</div>';
								unset($_SESSION['e_mail']);
								
							}
						?>
							
						<input type ="submit" value = "Rejestracja" class="form" />
							
					</form>
				</div>
			
	</div>
	
	<div id = "menu" >
	
			<div class="option"> <a href ="rejestr.php" > Rejestracja </a> </div>
			<div class="option"> <a href ="start.php" > Logowanie </a> </div> </br>
			
			
	</div>
	
	<div id="footer">
			Bancroot &copy; Wszelkie prawa zastrzeżone!
	</div>
		
		
		
		
		
		
	
	</div>
	
	
</body>
</html>