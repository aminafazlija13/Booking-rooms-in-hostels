<?php

// uspostavimo vezu sa MySQL serverom
$db = mysql_pconnect('localhost','root');
 
if (!$db)
     {
      echo ' Konekcija na server nije uspostavljena. Pokušajte ponovo!';
      exit;
      }

mysql_select_db("rezervacije");

$id=$_POST['brojR'];  // koristimo kraće ime varijable 


if (!$id)
	$sqlquery="INSERT INTO rezervacija VALUES( NULL, '{$_POST['ime']}','{$_POST['prezime']}', '{$_POST['datum']}', '{$_POST['brojnocenja']}')";

else
	$sqlquery="INSERT INTO rezervacija VALUES( $id, '{$_POST['ime']}','{$_POST['prezime']}', '{$_POST['datum']}', '{$_POST['brojnocenja']}')";
 
// pokušajmo izvršiti SQL komandu koju smo pripremili
$results = mysql_query($sqlquery); 

$x = mysql_query("SELECT datum, ime, prezime, broj_nocenja FROM rezervacija");




// provjerimo da li je izvršenje prošlo kako treba

if (mysql_error()) echo "GREŠKA! ".mysql_errno().":".mysql_error();

else{
	
	echo "<CENTER><P><B>REZERVACIJE</B></P></CENTER>";
	
echo "<center><table style='background-color:#FFEBCD; margin-top:25px; border: 5px solid white;
    border-collapse: collapse;>
            <tr style='border: 5px solid white;' >
                <th style='border: 5px solid white; padding: 15px;background-color:#F0FFFF; ' >Datum</th>
                <th style='border: 5px solid white; padding: 15px;background-color:#F0FFFF;' >Ime</th>
                <th style='border: 5px solid white;padding: 15px;background-color:#F0FFFF; ' >Prezime</th>
                <th style='border: 5px solid white; padding: 15px;background-color:#F0FFFF;' >Broj noćenja</th>
            </tr>";


	while ($red = mysql_fetch_array($x))
{
	$datum =$red['datum'];
	$ime = $red['ime'];
	$prezime = $red['prezime'];
	$nocenje = $red['broj_nocenja'];
	
     echo "<tr style='border: 5px solid white;padding: 15px;'><td style='border: 5px solid white;padding: 15px;'>".$datum."</td><td style='border: 5px solid white;padding: 15px;'>".$ime."</td><td style='border: 5px solid white;padding: 15px; ' >".$prezime."</td><td style='border: 5px solid white;padding: 15px; '>".$nocenje."</td></tr>";
}

echo "</table></center>";

mysql_free_result($x); // oslobadja memoriju

}




?>
