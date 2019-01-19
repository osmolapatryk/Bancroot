<?php

	session_start();
	
	if (!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}
	
	$banan = $_POST['banan'];
	$jablko = $_POST['jablko'];
	$czeresnie = $_POST['czeresnie'];
	$grejfrut = $_POST['grejfrut'];
	$brzoskwinie = $_POST['brzoskwinie'];
	$ananas = $_POST['ananas'];
	$maliny = $_POST['maliny'];
	$arbuz = $_POST['arbuz'];
	
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
				
					$b_sum = 0;
					$j_sum = 0;
					$br_sum = 0;
					$cz_sum = 0;
					$g_sum = 0;
					$a_sum = 0;
					$m_sum = 0;
					$ar_sum = 0;
					
					if($banan > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'banan'");
						$wiersz = $rezult->fetch_assoc();
						$b_sum = $wiersz['cena']*$banan;
						echo $banan."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$b_sum." zł </br>";
						
						$rezult->free_result();
					} 
					
					if($jablko > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'jablko'");
						$wiersz = $rezult->fetch_assoc();
						$j_sum = $wiersz['cena']*$jablko;
						echo $jablko."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$j_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($czeresnie > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'czeresnie'");
						$wiersz = $rezult->fetch_assoc();
						$cz_sum = $wiersz['cena']*$czeresnie;
						echo $czeresnie."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$cz_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($grejfrut > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'grejfrut'");
						$wiersz = $rezult->fetch_assoc();
						$g_sum = $wiersz['cena']*$grejfrut;
						echo $grejfrut."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$g_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($brzoskwinie > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'brzoskwinie'");
						$wiersz = $rezult->fetch_assoc();
						$br_sum = $wiersz['cena']*$brzoskwinie;
						echo $brzoskwinie."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$br_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($ananas > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'ananas'");
						$wiersz = $rezult->fetch_assoc();
						$a_sum = $wiersz['cena']*$ananas;
						echo $ananas."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$a_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($maliny > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'maliny'");
						$wiersz = $rezult->fetch_assoc();
						$m_sum = $wiersz['cena']*$maliny;
						echo $maliny."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$m_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($arbuz > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'arbuz'");
						$wiersz = $rezult->fetch_assoc();
						$ar_sum = $wiersz['cena']*$arbuz;
						echo $arbuz."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$ar_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					$_SESSION['suma'] = $b_sum + $ar_sum + $m_sum + $a_sum + $br_sum + $g_sum + $cz_sum + $j_sum;
					
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