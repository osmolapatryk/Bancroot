<?php

	session_start();
	
	if (!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}
	
	if($_SESSION['log'] != "Administrator")
	{
		header('Location:owoce.php');
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
					<?php
						echo "Witaj ".$_SESSION['log']."!";
					?>
				</div>
				<div id = "kosz" ><a href = "zamow.php"><img src = "img/kosz.jpg"> </img> </a>  </div>
				<div style="clear:both;"></div>			
			</div>
		</div>
		
	
	
	<div id = "content">
		<div id="halfcont1">
			<text>Zamówienia czekające na realizację:</text> </br><br/>
			
			<?php
				
				require_once "baza.php";
				$pol = @new mysqli($host, $db_user, $db_password, $db_name);
		
				if ($pol->connect_errno!=0)
				{
					echo "Error: ".$pol->connect_errno;
					//obsluga bledu polacznia
				}
				else 
				{
					
					$rezultat = @$pol->query("SELECT id_zamowienia,koszt, autor_zam FROM zamowienie WHERE status = 'oczekujace'");
					while ($row=mysqli_fetch_array($rezultat,MYSQLI_ASSOC))
										{
										 printf ("ID: %s   Od: %s    koszt: %s PLN  </br>", $row["id_zamowienia"],$row["autor_zam"],$row["koszt"]);	  
										}
					
					
					if(isset($_POST['id_zam']))
					{
						$id_zam = $_POST['id_zam'];
						
						@$pol->query("UPDATE zamowienie SET status = 'zrealizowane' WHERE id_zamowienia = '$id_zam'");
						unset($_POST['id_zam']);
						header('Location:admin.php');
					}
					
					if(isset($_POST['naz_prod']))
					{
						$nazwa = $_POST['naz_prod'];
						$cena = $_POST['cena_prod'];
						
						@$pol->query("UPDATE produkty SET cena = '$cena' WHERE nazwa = '$nazwa'");
						unset($_POST['naz_prod']);
						header('Location:admin.php');
						
						
					}
					
					
					
					
					$pol->close();			
				}
				
			?>
			<form method = "post" >
							</br> </br> <text> Zrealizuj zamówienie z ID </text> </br> </br>
								
							<input type = "number" name = "id_zam" class="form" min = "1" /> </br>
							<input type = "submit" name = "zrealizuj" class="form" value ="Zrealizuj"/> </br>
			</form>
		</div>
		
		<div id="halfcont2"> 
			<form method = "post" >
							</br> </br> <text> Zmień cenę produktu </text> </br> </br>
							Podaj nazwę produktu:</br>
							<input type = "text" name = "naz_prod" class="form" /> </br> </br>
							Podaj nową cenę: </br> </br>
							<input type = "number" name = "cena_prod" class="form" step="0.01" min = "0.01"/> </br>
							<input type = "submit" name = "zmien" class="form" value ="Zmień"/> </br>
			</form>
		</div>
		
		
	</div>
	
	<div id = "menu" >
	
			<div class="option"> <a href ="rejestr.php" > Rejestracja </a> </div>
			<div class="option"> <a href ="start.php" > Logowanie </a> </div> </br>
			<div class="option"> <a href ="owoce.php" > Owoce </a> </div> 
			<div class="option"> <a href ="warzywa.php" > Warzywa </div>
			<div class="option"> <a href ="nabial.php" > Nabiał </div>
			<div class="option"> <a href ="napoje.php" > Napoje </div>
			<div class="option"> <a href ="slodycze.php" > Słodycze </div>
			<div class="option"> <a href ="wyloguj.php" > Wyloguj się </div>
			
	</div>
	
	<div id="footer">
			Bancroot &copy; Wszelkie prawa zastrzeżone!
	</div>
		
		
		
		
		
		
	
	</div>
	
	
</body>
</html>