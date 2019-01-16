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
		<form action = "koszslodycze.php" method = "post" >
			<div class="tile"> 7 days - 1.49 zł </br>
				<img src = "img/7days.jpg" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "days" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Baton proteinowy - 2.99 zł </br> <img src = "img/baton.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "baton" min="1" max="20">	</br></br>
				
			</div> 
				
			<div class="tile"> Czekolada - 1.99 zł </br> <img src = "img/Choco.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "czekolada" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Ciastka czekoladowe - 3.49 zł </br> <img src = "img/cookie.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "ciastka" min="1" max="20">	</br></br>
				
			</div>
			<div style="clear:both;">
			
			</div>	
			<div class="tile"> Lody owocowe - 2.99 zł </br> <img src = "img/ice.png" style = "margin-left:100px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "lody" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Cukierki krówki - 1.29 zł\kg </br> <img src = "img/muu.jpg" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "cukierki" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Lizak owocowy - 1.49 zł </br> <img src = "img/lollipop.jpg" style = "margin-left:100px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "lizak" min="1" max="20">	</br></br>
				 
			</div>
			
			<div class="tile"> Wafle - 3.19 zł\kg </br> <img src = "img/wafel.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" name = "wafle" min="1" max="20">	</br></br>
				
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