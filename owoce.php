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
				<div id = "kosz" > <a href="kosz.php"> <img src = "img/kosz.jpg"> </img> </a>  </div>
				<div style="clear:both;"></div>			
			</div>
		</div>
		
	
	
	<div id = "content">
	
			<div class="tile"> Banan - 0.99 zł <br/>
				<img src = "img/banan.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Jabłko - 0.49 zł  <br/> <img src = "img/apple.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" min="1" max="20">	</br></br>
				
			</div> 
				
			<div class="tile"> Czereśnie - 2.99 zł/kg  <br/> <img src = "img/cherry.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Grejfrut - 0.65 zł  <br/> <img src = "img/grapefruit.png" style = "margin-left:50px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" min="1" max="20">	</br></br>
				
			</div>
			<div style="clear:both;">
			
			</div>	
			<div class="tile"> Brzoskwinie - 0.89 zł/kg <br/> <img src = "img/peach.png" style = "margin-left:50px; margin-top:10px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" min="1" max="20">	</br></br>
			</div>
			
			<div class="tile"> Ananas - 1.29 zł  <br/> <img src = "img/pineapple.png" style = "margin-left:90px; margin-top:10px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" min="1" max="20">	</br></br>
				
			</div>
			
			<div class="tile"> Maliny - 1.79 zł/kg  <br/> <img src = "img/raspberry.png" style = "margin-left:50px; margin-top:10px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" min="1" max="20">	</br></br>
				 
			</div>
			
			<div class="tile"> Arbuz - 2.29 zł  <br/> <img src = "img/watermelon.png" style = "margin-left:50px; margin-top:10px;"> </img> </br> </br>
				<text style = "margin-left:50px;">Podaj ilość</> <input type="number" id="ile" min="1" max="20">	</br></br>
				
			</div>
			
			<div style="clear:both;"></div>	
			<input type="button" id="zapisz" value="Do koszyka!">
			
			
	</div>
	
	<div id = "menu" >
	
			<div class="option"> <a href ="rejestracja.php" > Rejestracja </a> </div>
			<div class="option"> <a href ="index.php" > Logowanie </a> </div> </br>
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