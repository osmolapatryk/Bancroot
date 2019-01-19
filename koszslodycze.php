<?php

	session_start();
	
	if (!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}
	
	$days = $_POST['days'];
	$baton = $_POST['baton'];
	$czekolada = $_POST['czekolada'];
	$ciastka = $_POST['ciastka'];
	$lody = $_POST['lody'];
	$cukierki = $_POST['cukierki'];
	$lizak = $_POST['lizak'];
	$wafle = $_POST['wafle'];
	
	require_once "baza.php";
	

	
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
				<div id = "kosz" > <img src = "img/kosz.jpg"> </img> </a>  </div>
				<div style="clear:both;"></div>			
			</div>
		</div>
		
	
	
	<div id = "content">
		<text style="font-size:30px;margin-left:30px;"> W Twoim koszyku: </text> </br> </br>
		<?php
		
			$pol = @new mysqli($host, $db_user, $db_password, $db_name); 
	
			if ($pol->connect_errno!=0)
			{
				echo "Error: ".$pol->connect_errno;
				//obsluga bledu polacznia
			}
			else 
			{
				
				$d_sum = 0;
				$b_sum = 0;
				$c_sum = 0;
				$cz_sum = 0;
				$l_sum = 0;
				$cu_sum = 0;
				$li_sum = 0;
				$w_sum = 0;
					
					if($days > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = '7 days'");
						$wiersz = $rezult->fetch_assoc();
						$d_sum = $wiersz['cena']*$days;
						echo $days."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$d_sum." zł </br>";
						
						$rezult->free_result();
					} 
					
					if($baton > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'baton proteinowy'");
						$wiersz = $rezult->fetch_assoc();
						$b_sum = $wiersz['cena']*$baton;
						echo $baton."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$b_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($czekolada > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'czekolada'");
						$wiersz = $rezult->fetch_assoc();
						$cz_sum = $wiersz['cena']*$czekolada;
						echo $czekolada."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$cz_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($ciastka > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'ciastka czekoladowe'");
						$wiersz = $rezult->fetch_assoc();
						$c_sum = $wiersz['cena']*$ciastka;
						echo $ciastka."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$c_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($lody > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'lody owocowe'");
						$wiersz = $rezult->fetch_assoc();
						$l_sum = $wiersz['cena']*$lody;
						echo $lody."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$l_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($cukierki > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'krowki'");
						$wiersz = $rezult->fetch_assoc();
						$cu_sum = $wiersz['cena']*$cukierki;
						echo $cukierki."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$cu_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($lizak > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'lizak'");
						$wiersz = $rezult->fetch_assoc();
						$l_sum = $wiersz['cena']*$lizak;
						echo $lizak."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$l_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($wafle > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'wafle'");
						$wiersz = $rezult->fetch_assoc();
						$w_sum = $wiersz['cena']*$wafle;
						echo $wafle."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$w_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					$_SESSION['suma'] = $d_sum + $b_sum + $cz_sum + $c_sum + $l_sum + $cu_sum + $l_sum + $w_sum;
					
					echo "</br></br> Suma: ".$_SESSION['suma']." zł.";
					
					
				$pol->close();
			}

			
		?>
		
		<form action = "zatwierdz.php" method = "post" >
			<input  type = "submit" value = "Zatwierdź" class = "form" >
		</form>
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