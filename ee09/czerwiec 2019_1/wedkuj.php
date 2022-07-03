<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Wędkujemy</title>
	<link rel="stylesheet" href="style_1.css">
</head>
<body>
	<div id="baner"><h1>Portal dla wędkarzy</h1></div>
	<div id="lewy">
		<h2>Ryby drapiażne naszych wód</h2>
		<ul>
			<?php
			$db=mysqli_connect('localhost','root','','wedkowanie');
			$q1='SELECT ryby.nazwa, ryby.wystepowanie FROM ryby WHERE ryby.styl_zycia = 1';
			
			$wyniki=mysqli_query($db,$q1);
			$ile=mysqli_num_rows($wyniki);
			
			for($i=0; $i<$ile; $i++)
			{	$wiersz=mysqli_fetch_array($wyniki);
				echo '<li>'.$wiersz['nazwa'].', występowanie'.$wiersz['wystepowanie'].'</li>';
			}
			mysqli_close($db);
			?>
		</ul>
	</div>
	<div id="prawy">
		<img src="ryba1.jpg" alt="Sum">
		<a href="kwerendy.txt" download="kwerendy" >Pobierz kwerendy</a>
	</div>
	<div id="stopka"><p>Stronę wykonał: Pesel</p></div>
</body>
</html>