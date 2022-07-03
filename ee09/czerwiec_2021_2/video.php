<!doctype HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Video On Demand</title>
	<link rel="stylesheet" href="styl3.css">
</head>
<body>
	<div id="b1">
		<h1>Internetowa wypożyczalnia filmów</h1>
	</div>
	<div id="b2">
		<table>
			<tr><td>Kryminał</td><td>Horror</td><td>Przygoda</td><tr>
			<tr><td>20</td><td>30</td><td>20</td><tr>
		</table>
	</div>
	
	<div id="polecamy">
		<h3>Polecamy</h3>
		<?php
			//skrypt1
			$db=mysqli_connect('localhost','root','','dane3');
			$q1='SELECT id,nazwa,opis,zdjecie FROM produkty WHERE id IN (18,22,23,25)';
			$wynik=mysqli_query($db,$q1);
			$ile=mysqli_num_rows($wynik);
			for($i=0;$i<$ile;$i++)
			{
				$wiersz=mysqli_fetch_array($wynik);
				echo '<div class="wynik"><h4>'.$wiersz['id'].'. '.$wiersz['nazwa'].'</h4><img src="'.$wiersz['zdjecie'].'"><p>'.$wiersz['opis'].'</p></div>';
			}
				mysqli_close($db);
		?>	
		
	</div>
	<div id="filmy">
		<h3>Filmy fantastychne</h3>
		<?php
			//skrypt2
			$db=mysqli_connect('localhost','root','','dane3');
			$q2='SELECT id,nazwa,opis,zdjecie FROM produkty WHERE Rodzaje_id = 12;';
			$wynik2=mysqli_query($db,$q2);
			$ile2=mysqli_num_rows($wynik2);
			for($i=0;$i<$ile2;$i++)
			{
				
				$wiersz=mysqli_fetch_array($wynik2);
				echo '<div class="wynik"><h4>'.$wiersz['id'].'. '.$wiersz['nazwa'].'</h4><img src="'.$wiersz['zdjecie'].'"><p>'.$wiersz['opis'].$i.'</p></div>';
			}
			mysqli_close($db);
		?>	
	
	</div>
	
	<div id="stopka">
		<form method="POST" action="">
			<label>Usuń film nr: <input type="number" name="id"></label>
			<input type="submit" value="Usuń film" name="klik">
		</form>
		Stronę wykonał <a href="ja@poczta.com">PESEL</a>
	
	</div>
	
	
</body>
</html>