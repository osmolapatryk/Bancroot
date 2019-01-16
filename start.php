<?php

	session_start();
	
	if ((isset($_SESSION['logged'])) && ($_SESSION['logged']==true))
	{
		header('Location: owoce.php');
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
					 Witaj w Bancroot! 
				</div>
				<div style="clear:both;"></div>			
			</div>
		</div>
		
	
	
	<div id = "content">
	
			<div id = "log" >
					<form action = "logowanie.php" method = "post" > </br></br>
					
						<text id="title" > Logowanie </text> </br>
							
						<input type = "text" name = "log" class="form" placeholder="Login" onfocus ="this.placeholder=''" onblur = "this.placeholder='Login'"/> </br>
						<input type = "password" name = "pass" class="form" placeholder="Password" onfocus ="this.placeholder=''" onblur = "this.placeholder='Password'"/> </br>
						
						<?php
						if(isset($_SESSION['err']))echo $_SESSION['err'];
							unset($_SESSION['err']);
						?>
							
						<input type ="submit" value = "Zaloguj się" class="form" />
							
					</form>
					
				</div>
			
	</div>
	
	<div id = "menu" >
	
			<div class="option"> <a href ="rejestr.php" > Rejestracja </a> </div>
			<div class="option"> <a href ="start.php" > Logowanie </a> </div> </br>
			
			
	</div>
	
	<div id="footer">
			Bancroot &copy; Wszelkie prawa zastrzeżone!
	</div>
		
		
		
		
		
		
	
	</div>
	
	
</body>
</html>