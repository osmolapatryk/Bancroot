<?php

	session_start();
	
	if (!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}
	
	$burak = $_POST['burak'];
	$marchew = $_POST['marchew'];
	$kukurydza = $_POST['kukurydza'];
	$ogorki = $_POST['ogorki'];
	$cebula = $_POST['cebula'];
	$papryka = $_POST['papryka'];
	$rzodkiewka = $_POST['rzodkiewka'];
	$pomidor = $_POST['pomidor'];
	
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
				//$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE kategoria = 'owoce'");
					
												
				//$rezult->free_result();
					$b_sum = 0;
					$m_sum = 0;
					$k_sum = 0;
					$o_sum = 0;
					$c_sum = 0;
					$p_sum = 0;
					$rz_sum = 0;
					$po_sum = 0;
					$zamowienie = "";
					
					if($burak > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'burak'");
						$wiersz = $rezult->fetch_assoc();
						$b_sum = $wiersz['cena']*$burak;
						echo $burak."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$b_sum." zł </br>";
						$zamowienie = $zamowienie.$burak."x ".$wiersz['nazwa']." cena: ".$b_sum." PLN </br> ";
						
						$rezult->free_result();
					} 
					
					if($marchew > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'marchew'");
						$wiersz = $rezult->fetch_assoc();
						$m_sum = $wiersz['cena']*$marchew;
						echo $marchew."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$m_sum." zł </br>";
						$zamowienie = $zamowienie.$marchew."x ".$wiersz['nazwa']." cena: ".$m_sum." PLN </br> ";
						
						$rezult->free_result();
					}
					
					if($kukurydza > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'kukurydza'");
						$wiersz = $rezult->fetch_assoc();
						$k_sum = $wiersz['cena']*$kukurydza;
						echo $kukurydza."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$k_sum." zł </br>";
						$zamowienie = $zamowienie.$kukurydza."x ".$wiersz['nazwa']." cena: ".$k_sum." PLN </br> ";
						
						$rezult->free_result();
					}
					
					if($ogorki > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'ogorek'");
						$wiersz = $rezult->fetch_assoc();
						$o_sum = $wiersz['cena']*$ogorki;
						echo $ogorki."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$o_sum." zł </br>";
						$zamowienie = $zamowienie.$ogorki."x ".$wiersz['nazwa']." cena: ".$o_sum." PLN </br> ";
						
						$rezult->free_result();
					}
					
					if($cebula > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'cebula'");
						$wiersz = $rezult->fetch_assoc();
						$c_sum = $wiersz['cena']*$cebula;
						echo $cebula."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$c_sum." zł </br>";
						$zamowienie = $zamowienie.$cebula."x ".$wiersz['nazwa']." cena: ".$c_sum." PLN </br> ";
						
						
						$rezult->free_result();
					}
					
					if($papryka > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'papryka'");
						$wiersz = $rezult->fetch_assoc();
						$p_sum = $wiersz['cena']*$papryka;
						echo $papryka."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$p_sum." zł </br>";
						$zamowienie = $zamowienie.$papryka."x ".$wiersz['nazwa']." cena: ".$p_sum." PLN </br> ";
						
						$rezult->free_result();
					}
					
					if($rzodkiewka > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'rzodkiewka'");
						$wiersz = $rezult->fetch_assoc();
						$rz_sum = $wiersz['cena']*$rzodkiewka;
						echo $rzodkiewka."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$rz_sum." zł </br>";
						$zamowienie = $zamowienie.$rzodkiewka."x ".$wiersz['nazwa']." cena: ".$rz_sum." PLN </br> ";
						
						$rezult->free_result();
					}
					
					if($pomidor > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'pomidor'");
						$wiersz = $rezult->fetch_assoc();
						$po_sum = $wiersz['cena']*$pomidor;
						echo $pomidor."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$po_sum." zł </br>";
						$zamowienie = $zamowienie.$pomidor."x ".$wiersz['nazwa']." cena: ".$po_sum." PLN </br> ";
						
						$rezult->free_result();
					}
					
					$_SESSION['suma'] = $b_sum + $k_sum + $m_sum + $o_sum + $c_sum + $p_sum + $rz_sum + $po_sum;
					
					echo "</br></br> Suma: ".$_SESSION['suma']." zł.";
					
					$_SESSION['zamowienie'] = $zamowienie;
					
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