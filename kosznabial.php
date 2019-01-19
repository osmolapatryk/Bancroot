<?php

	session_start();
	
	if (!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
	}
	
	$maslo = $_POST['maslo'];
	$gouda = $_POST['gouda'];
	$twarog = $_POST['twarog'];
	$jajka = $_POST['jajka'];
	$ser = $_POST['ser'];
	$mleko = $_POST['mleko'];
	$jogurt = $_POST['jogurt'];
	$musli = $_POST['musli'];
	
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
				$g_sum = 0;
				$t_sum = 0;
				$ja_sum = 0;
				$j_sum = 0;
				$s_sum = 0;
				$ml_sum = 0;
				$m_sum = 0;
				$mu_sum = 0;
					
					if($maslo > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'maslo'");
						$wiersz = $rezult->fetch_assoc();
						$m_sum = $wiersz['cena']*$maslo;
						echo $maslo."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$m_sum." zł </br>";
						
						$rezult->free_result();
					} 
					
					if($gouda > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'gouda'");
						$wiersz = $rezult->fetch_assoc();
						$g_sum = $wiersz['cena']*$gouda;
						echo $gouda."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$g_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($twarog > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'twarog'");
						$wiersz = $rezult->fetch_assoc();
						$t_sum = $wiersz['cena']*$twarog;
						echo $twarog."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$t_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($jogurt > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'jogurt truskawkowy'");
						$wiersz = $rezult->fetch_assoc();
						$j_sum = $wiersz['cena']*$jogurt;
						echo $jogurt."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$j_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($jajka > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'jajka'");
						$wiersz = $rezult->fetch_assoc();
						$ja_sum = $wiersz['cena']*$jajka;
						echo $jajka."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$ja_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($ser > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'ser szwajcarski'");
						$wiersz = $rezult->fetch_assoc();
						$s_sum = $wiersz['cena']*$ser;
						echo $ser."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/kg razem: ".$s_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($mleko > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'mleko'");
						$wiersz = $rezult->fetch_assoc();
						$ml_sum = $wiersz['cena']*$mleko;
						echo $mleko."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$ml_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					if($musli > 0)
					{
						$rezult = @$pol->query("SELECT id_produktu,nazwa,cena FROM produkty WHERE nazwa = 'musli'");
						$wiersz = $rezult->fetch_assoc();
						$mu_sum = $wiersz['cena']*$musli;
						echo $musli."x ".$wiersz['nazwa']." ".$wiersz['cena']."zł/szt razem: ".$mu_sum." zł </br>";
						
						$rezult->free_result();
					}
					
					$_SESSION['suma'] = $g_sum + $t_sum + $m_sum + $j_sum + $ja_sum + $s_sum + $ml_sum + $mu_sum;
					
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