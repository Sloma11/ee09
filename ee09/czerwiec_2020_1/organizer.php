<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Organizer</title>
	<link rel="stylesheet" href="styl6.css">
</head>
<body>
	<div id="baner">
		<div id="b1"><h2>MÓJ ORGANIZER</h2></div>
		<div id="b2">
			<form method="POST" action="">
				<label>Wpisz wydarzenie:<input type="text" name="wpis"></label><input type="submit" value="ZAPISZ" name="wyslij">
			</form>
		</div>
		<div id="b3"><img src="logo2.png" alt="Mój organizer"></div>
	</div>
	<div id="main">
		<?php
		//skrypt1
		$db=mysqli_connect('localhost','root','','egzamin6');
		if(isset($_POST['wyslij']))
		{	$wpis = $_POST['wpis'];
			$q1 = 'UPDATE zadania SET wpis="'.$wpis.'" WHERE dataZadania = "2020-08-27"';
			$w1=mysqli_query($db,$q1);
		}	
		//---------------------------
		$q2='SELECT dataZadania, miesiac, wpis FROM `zadania` WHERE miesiac = "sierpien";';
		$w2=mysqli_query($db,$q2);
		$ile=mysqli_num_rows($w2);
		for($i=0;$i<$ile;$i++)
		{
			$wiersz=mysqli_fetch_array($w2);
			echo '<div class="dane"><h6>'.$wiersz['dataZadania'].','.$wiersz['miesiac'].'</h6><p>'.$wiersz['wpis'].'</p></div>';
		}
		
		
		?>
	</div>
	<div id="stopka">
		<?php
		//skrypt2
		$q3='SELECT miesiac, rok FROM zadania WHERE dataZadania="2020-08-01"';
		$w3=mysqli_query($db,$q3);
		$wiersz2=mysqli_fetch_array($w3);
		echo '<h1>miesiąc:'.$wiersz2['miesiac'].', rok:'.$wiersz2['rok'].'</h1>';
		
		mysqli_close($db);
		?>
		<p>Stronę wykonał: PESEL</p>
	</div>
</body>


</html>