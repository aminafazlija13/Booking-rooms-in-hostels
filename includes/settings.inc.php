<?php
		session_start();
		include'../dbh.php';
	
		$uid = $_SESSION['id'];
		
		$sql = "SELECT * FROM klijent WHERE id_klijent='$uid'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		
		$firstO = $row['ime'];
		$lastO = $row['prezime'];
		$usernameO = $row['username'];
		$emailO = $row['email'];
		$pwdO = $row['pwd'];
		$streetO = $row['ulica'];
		$postCodeO = $row['postanski_broj'];
		$cityO = $row['grad'];
		$phNumO = $row['broj_telefona'];
		
		$first = $_POST['firstC'];
		$last = $_POST['lastC'];
		$username = $_POST['uidC'];
		$email = $_POST['emailC'];
		$pwd = $_POST['pwdC'];
		$street = $_POST['streetC'];
		$postCode = $_POST['postCodeC'];
		$city = $_POST['cityC'];
		$phNum = $_POST['phNumC'];
		$hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
		
		if(empty($first)){$first = $firstO;}
		if(empty($last)){$last = $lastO;}
		if(empty($username)){$username = $usernameO;}
		if(empty($email)){$email = $emailO;}
		if(empty($street)){$street = $streetO;}
		if(empty($postCode)){$postCode = $postCodeO;}
		if(empty($city)){$city = $cityO;}
		if(empty($phNum)){$phNum = $phNumO;}
		
		if(empty($pwd)){
			$sql = "UPDATE klijent SET username='$username', ime='$first', prezime='$last', ulica='$street',
				postanski_broj='$postCode', grad='$city', email='$email', broj_telefona='$phNum'
				WHERE id_klijent='$uid'";
				$result = mysqli_query($conn, $sql);
		}
		else {
			$sql = "UPDATE klijent SET username='$username', ime='$first', prezime='$last', ulica='$street',
				postanski_broj='$postCode', grad='$city', email='$email', broj_telefona='$phNum', pwd='$hashpwd' 
				WHERE id_klijent='$uid'";
				$result = mysqli_query($conn, $sql);
		
		};
				
		
		header("Location: ../settings.php?changed");
		
		/*if(empty($first)){
			header("Location: ../signup.php?error=emptyF");
			exit();
		}
		if(empty($email)){
			header("Location: ../signup.php?error=emptyL");
			exit();
		}
		if(empty($last)){
			header("Location: ../signup.php?error=emptyU");
			exit();
		}
		if(empty($pwd)){
			header("Location: ../signup.php?error=emptyE");
			exit();
		}
		if(empty($email)){
			header("Location: ../signup.php?error=emptyP");
			exit();
		}
		else {
		$sql = "SELECT uid FROM klijent WHERE username='$uid'";
		$result = mysqli_query($conn, $sql);
		$uidcheck = mysqli_num_rows($result);
			
			if($uidcheck > 0){
				header("Location: ../signup.php?error=username");
				exit();
			}
			else {
				
				$encrypted_password = password_hash($pwd, PASSWORD_DEFAULT);
				
				$sql = "INSERT INTO klijent (username, ime, prezime, ulica, postanski_broj, grad, email, broj_telefona, pwd) 
				VALUES ('$uid', '$first', '$last', '$street', '$postCode', '$city', '$email', '$phNum', '$encrypted_password')";
				$result = mysqli_query($conn, $sql);	
				
				header("Location: ../index.php");
			}
		}
		*/