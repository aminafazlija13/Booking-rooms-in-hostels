<?php
		include'dbh.php';
		include'header.php';
		
		$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	
		
		$uid = $_SESSION['id'];
		
		$sql = "SELECT * FROM klijent WHERE id_klijent='$uid'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		
		"<form method='POST'>
			<input type='hidden' name='firstO' value='".$row['ime']."'>
			<input type='hidden' name='lastO' value='".$row['prezime']."'>
			<input type='hidden' name='emailO' value='".$row['email']."'>
			<input type='hidden' name='usernameO' value='".$row['username']."'>
			<input type='hidden' name='phNumO' value='".$row['broj_telefona']."'>
			<input type='hidden' name='cityO' value='".$row['grad']."'>
			<input type='hidden' name='postCodeO' value='".$row['postanski_broj']."'>
			<input type='hidden' name='streetO' value='".$row['ulica']."'>
		</form>";
		
		
		echo "<form method='POST'>
				<button type='submit' name='changePS'>Change profile settings</button>
			</form>";
		if(strpos($url, 'changed') !== false){
			echo "Changes saved!";
		};
		if (isset($_POST['changePS'])){
		echo "<form action='includes/settings.inc.php' method='POST'>
				<table>
					<tr>
						<td>First name: </td>
						<td>".$row['ime']."</td>
						<td><input type='text' name='firstC' placeholder='New First name'></td>
					</tr>
					<tr>
						<td>Last name: </td>
						<td>".$row['prezime']."</td>
						<td><input type='text' name='lastC' placeholder='New Last name'></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td>".$row['email']."</td>
						<td><input type='text' name='emailC' placeholder='New Email'></td>
					</tr>
					<tr>
						<td>Username: </td>
						<td>".$row['username']."</td>
						<td><input type='text' name='uidC' placeholder='New Username'></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td>**********</td>
						<td><input type='password' name='pwdC' placeholder='New Password'></td>
					</tr>
					<tr>
						<td>Phone number: </td>
						<td>".$row['broj_telefona']."</td>
						<td><input type='text' name='phNumC' placeholder='New phone number'></td>
					</tr>
					<tr>
						<td>City: </td>
						<td>".$row['grad']."</td>
						<td><input type='text' name='cityC' placeholder='New City'></td>
					</tr>
					<tr>
						<td>Postal code: </td>
						<td>".$row['postanski_broj']."</td>
						<td><input type='text' name='postCodeC' placeholder='New Postal code'></td>
					</tr>
					<tr>
						<td>Street name: </td>
						<td>".$row['ulica']."</td>
						<td><input type='text' name='streetC' placeholder='New Street name'></td>
					</tr>
				</table>
				<button type='submit'>Save changes</button>
			</form>";
		};
		
	