<?php

	session_start();
	
	if (!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}
	
	$wino = $_POST['wino'];
	$herbata = $_POST['herbata'];
	$sprite = $_POST['sprite'];
	$pepsi = $_POST['pepsi'];
	$sok = $_POST['sok'];
	$dew = $_POST['dew'];
	$cola = $_POST['cola'];
	$kawa = $_POST['kawa'];
	
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
				<div id = "kosz" > <a href ="zamow.php"><img src = "img/kosz.jpg"> </img> </a>  </div>
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
				$w_sum = 0;
				$h_sum = 0;
				$s_sum = 0;
				$p_sum = 0;
				$so_sum = 0;
				$d_sum = 0;
				$c_sum = 0;
				$k_sum = 0;
				$zamowienie = "";
					
					if($wino > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'wino czerwone'");
						$wiersz = $rezult->fetch_assoc();
						$w_sum = $wiersz['cena']*$wino;
						echo $wino."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$w_sum." zł </br>";
						$zamowienie = $zamowienie.$wino."x ".$wiersz['nazwa']." cena: ".$w_sum." PLN </br> ";
						
						$rezult->free_result();
					} 
					
					if($herbata > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'herbata'");
						$wiersz = $rezult->fetch_assoc();
						$h_sum = $wiersz['cena']*$herbata;
						echo $herbata."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$h_sum." zł </br>";
						$zamowienie = $zamowienie.$herbata."x ".$wiersz['nazwa']." cena: ".$h_sum." PLN </br> ";
						
						$rezult->free_result();
					}
					
					if($sprite > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'sprite'");
						$wiersz = $rezult->fetch_assoc();
						$s_sum = $wiersz['cena']*$sprite;
						echo $sprite."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$s_sum." zł </br>";
						$zamowienie = $zamowienie.$sprite."x ".$wiersz['nazwa']." cena: ".$s_sum." PLN </br> ";
						
						$rezult->free_result();
					}
					
					if($pepsi > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'pepsi'");
						$wiersz = $rezult->fetch_assoc();
						$p_sum = $wiersz['cena']*$pepsi;
						echo $pepsi."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$p_sum." zł </br>";
						$zamowienie = $zamowienie.$pepsi."x ".$wiersz['nazwa']." cena: ".$p_sum." PLN </br> ";
						
						$rezult->free_result();
					}
					
					if($sok > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'sok pomaranczowy'");
						$wiersz = $rezult->fetch_assoc();
						$so_sum = $wiersz['cena']*$sok;
						echo $sok."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$so_sum." zł </br>";
						$zamowienie = $zamowienie.$sok."x ".$wiersz['nazwa']." cena: ".$so_sum." PLN </br> ";
						
						$rezult->free_result();
					}
					
					if($dew > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'Mountain dew'");
						$wiersz = $rezult->fetch_assoc();
						$d_sum = $wiersz['cena']*$dew;
						echo $dew."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$d_sum." zł </br>";
						$zamowienie = $zamowienie.$dew."x ".$wiersz['nazwa']." cena: ".$d_sum." PLN </br> ";
						
						$rezult->free_result();
					}
					
					if($cola > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'coca cola'");
						$wiersz = $rezult->fetch_assoc();
						$c_sum = $wiersz['cena']*$cola;
						echo $cola."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$c_sum." zł </br>";
						$zamowienie = $zamowienie.$cola."x ".$wiersz['nazwa']." cena: ".$c_sum." PLN </br> ";
						
						$rezult->free_result();
					}
					
					if($kawa > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'kawa'");
						$wiersz = $rezult->fetch_assoc();
						$k_sum = $wiersz['cena']*$kawa;
						echo $kawa."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$k_sum." zł </br>";
						$zamowienie = $zamowienie.$kawa."x ".$wiersz['nazwa']." cena: ".$k_sum." PLN </br> ";
						
						$rezult->free_result();
					}
					
					$_SESSION['zamowienie'] = $zamowienie;
					$_SESSION['suma'] = $w_sum + $h_sum + $s_sum + $p_sum + $so_sum + $d_sum + $c_sum + $k_sum;
					
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