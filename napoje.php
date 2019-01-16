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
				<div id = "kosz" > <img src = "img/kosz.jpg"> </img> </a>  </div>
				<div style="clear:both;"></div>			
			</div>
		</div>
		
	
	
	<div id = "content">
		<form action = "kosznapoje.php" method = "post" >
			<div class="tile"> Wino czerwone - 7.99 zł </br>
				<img src = "img/wine.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "wino" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Herbata - 2.99 zł </br> <img src = "img/tea.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "herbata" min="1" max="20">	</br></br>
				
			</div> 
				
			<div class="tile"> Sprite - 1.49 zł </br> <img src = "img/sprite.png" style = "margin-left:100px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "sprite" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Pepsi - 1.79 zł </br> <img src = "img/pepsi.png" style = "margin-left:100px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "pepsi" min="1" max="20">	</br></br>
				
			</div>
			<div style="clear:both;">
			
			</div>	
			<div class="tile"> Sok pomarańczowy - 2.29 zł </br> <img src = "img/drink.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "sok" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Mountain dew - 2.99 zł </br> <img src = "img/dew.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "dew" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Coca Cola - 3.79 zł </br> <img src = "img/cola.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "cola" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Kawa - 1.99 zł </br> <img src = "img/coffee.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "kawa" min="1" max="20">	</br></br>
				
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