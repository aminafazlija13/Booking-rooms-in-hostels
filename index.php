<?php
	include'header.php';

	
	
	if (isset($_SESSION['id'])){
		echo "<center><form action='includes/unesi.php' method='POST'>
		                         <br><br><p>Broj rezervacije: </p><br>
		                        <input style='border: 3px solid #FFEBCD; padding: 15px; border-radius: 4px;' type='number' name='brojR' ><br><br>
		
		                       <p>Ime: </p> <br>
		                        <input style='border: 3px solid #FFEBCD; padding: 15px; border-radius: 4px;' type='text' name='ime' ><br><br>
								<p>Prezime: </p><br>
								<input style='border: 3px solid #FFEBCD; padding: 15px; border-radius: 4px;'  type='text' name='prezime' ><br><br>
								<p>Datum rezervacije: </p><br>
                                <input style='border: 3px solid #FFEBCD; padding: 15px; border-radius: 4px;'  type='date' name='datum'><br><br>
								<p>Broj noćenja: </p><br>
								<input style='border: 3px solid #FFEBCD; padding: 15px; border-radius: 4px;'  type='number' name='brojnocenja'><br><br>
								<button style='border: 3px solid #F0FFFF; background-color:#F0FFFF; padding: 15px;' type='spremi'>Spremi</button>
							</form></center>";
	}
	else {
		echo "<div class='sect sectOne'></div>
		<div class='subSection'><h1>
Smještaj</h1><p style='text-align:justify; ' > <br><br><br><B> Hotel u ponudi ima 66 soba gdje se razlikuju SUPERIOR, BUSSINESS i CLASSIC sobe i 3 apartmana.
Svaka soba posjeduje: klima uređaj s mogućnošću individualne kontrole, telefon - direktno biranje, SAT , internet priključak, utičnice 220 V / 120V, sef u sobi, mini bar, sušilo za kosu i ogrtač za kupanje.
Dodatne mogućnosti su: treći ležaj, sobe za nepušače, sobe za osobe s posebnim potrebama, check in: 14 h, check out: 12h.<br><br>
 
Izaberete li klasičnu sobu ili apartman dočekat će Vas jednako ugodan i intiman interijer opremljen kako bi ugodio svakome.</b></p></div>
		<div class='sect sectTwo'></div>
		<div class='subSection'><h1>
Restoran</h1><p style='text-align:justify; ' > <br><br><br><B> Vrhunski majstori kulinarstva za Vas pripremaju najraznovrsnije gastronomske užitke među kojima izdvajamo veliki izbor toplih i hladnih predjela, juha i čorbi, originalan izbor mesnih jela, priloga i salata, a naročito izdvajamo širok izbor tradicionalnih bosansko-hercegovačkih jela kao i specijalitete kuće koji će Vas sigurno oduševiti.<br><br>
 
Restoran Vam, također, nudi veliki izbor toplih i hladnih napitaka, alkoholnih pića, kao i široku lepezu kvalitetnih vina iz različitih regiona.</b></p></div></div>
		<div class='sect sectThree'></div>";
	}
	
?>
</body>
</html>