<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Panel administratora</title>
	<link rel="stylesheet" href="styl4.css">
</head>
<body>
	<div id="baner">
		<h3>Portal Społecznościowy - panel administratora</h3>
	</div>
	<div id="lewy">
		<h4>Użytkownicy</h4>
		<?php 
			//skrypt1
			$db=mysqli_connect('localhost','root','','dane4');
			$q1='SELECT id,imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30;';
			$wynik=mysqli_query($db,$q1);
			$ile=mysqli_num_rows($wynik);
			for($i=0;$i<$ile;$i++)
			{
				$wiersz=mysqli_fetch_array($wynik);
				echo $wiersz['id'].'. '.$wiersz['imie'].' '.$wiersz['nazwisko'].', '.(date('Y')-$wiersz['rok_urodzenia']).' lat<br>';
				
			}
			
		?>
		<a href="settings.html">Inne ustawienia</a>
	</div>
	<div id="prawy">
		<h4>Podaj id użydkownika</h4>
		<form method="POST" action="">
			<input type="number" name="id"><input type="submit" value="ZOBACZ" id="zobacz" name="zobacz">
		</form>
		<hr>
		<?php
			//skrypy2
			if(isset($_POST['zobacz']))
			{	$id=$_POST['id'];
				$q2='SELECT imie, nazwisko, rok_urodzenia, opis, zdjecie, nazwa FROM osoby INNER JOIN hobby ON osoby.Hobby_id = hobby.id WHERE osoby.id ='.$id.';';
				$wynik2=mysqli_query($db,$q2);
				$wiersz2=mysqli_fetch_array($wynik2);
				echo '<h2>'.$id.'. '.$wiersz2['imie'].' '.$wiersz2['nazwisko'].'</h2>';
				echo '<img src="'.$wiersz2['zdjecie'].'" alt="'.$id.'">';
				echo '<br>Rok urodzenia: '.$wiersz2['rok_urodzenia'];
				echo '<br>Opis: '.$wiersz2['opis'];
				echo '<br>Hobby: '.$wiersz2['nazwa'];
			}
			mysqli_close($db);
		?>
	</div>
	<div id="stopka">
		Stronę wykonał PESEL
	</div>
</body>

</html>