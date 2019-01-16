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
				<div id = "kosz" ><img src = "img/kosz.jpg"> </img> </a>  </div>
				<div style="clear:both;"></div>			
			</div>
		</div>
		
	
	
	<div id = "content">
		<form action = "koszwarzywa.php" method = "post" >
			<div class="tile"> Burak czerwony - 1.89 zł\kg </br>
				<img src = "img/beet.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "burak" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Marchew - 2.49 zł\kg </br> <img src = "img/carrot.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "marchew" min="1" max="20">	</br></br>
				
			</div> 
				
			<div class="tile"> Kukurydza - 3.99 zł\kg </br> <img src = "img/corn.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "kukurydza" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Ogórki - 2.39 zł\kg </br> <img src = "img/cucumber.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "ogorki" min="1" max="20">	</br></br>
				
			</div>
			<div style="clear:both;">
			
			</div>	
			<div class="tile"> Cebula - 2.99 zł\kg </br> <img src = "img/onion.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "cebula" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Papryka czerwona 3.29 zł\kg </br> <img src = "img/pepper.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "papryka" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Rzodkiewka - 1.99 zł\kg </br> <img src = "img/radish.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "rzodkiewka" min="1" max="20">	</br></br>
				 
			</div>
			
			<div class="tile"> Pomidor - 0.49 zł </br> <img src = "img/tomato.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "pomidor" min="1" max="20">	</br></br>
				
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