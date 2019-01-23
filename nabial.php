<?php

	session_start();
	
	if (!isset($_SESSION['logged']))
	{
		header('Location: index.php');
		exit();
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
				<div id = "kosz" > <a href ="zamow.php"><img src = "img/kosz.jpg"> </img> </a>  </div>
				<div style="clear:both;"></div>			
			</div>
		</div>
		
	
	
	<div id = "content">
		<form action = "kosznabial.php" method = "post" >
			<div class="tile"> Masło - 2.25 zł </br>
				<img src = "img/butter.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "maslo" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Ser Gouda - 3.79 zł\kg </br> <img src = "img/cheese.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "gouda" min="1" max="20">	</br></br>
				
			</div> 
				
			<div class="tile"> Ser Twaróg - 2.49 zł\kg </br> <img src = "img/cotage.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "twarog" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Jogurt truskawkowy - 1.79 zł\kg </br> <img src = "img/danone.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "jogurt" min="1" max="20">	</br></br>
				
			</div>
			<div style="clear:both;">
			
			</div>	
			<div class="tile"> Jajka - 0.29 zł </br> <img src = "img/egg.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "jajka" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Ser szwajcarski - 3.39 zł\kg </br> <img src = "img/gouda.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "ser" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Mleko - 2.29 zł </br> <img src = "img/milk.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "mleko" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Musli - 1.49 zł </br> <img src = "img/yogurt.png" style = "margin-left:30px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "musli" min="1" max="20">	</br></br>
				
			</div>
			
			<div style="clear:both;"></div>	
			<input type="submit" id="zapisz" value="Do koszyka!">
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