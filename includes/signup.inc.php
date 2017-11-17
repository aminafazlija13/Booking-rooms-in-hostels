<?php
		session_start();
		include'../dbh.php';
	
		$first = $_POST['first'];
		$last = $_POST['last'];
		$uid = $_POST['uid'];
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$street = $_POST['street'];
		$postCode = $_POST['postCode'];
		$city = $_POST['city'];
		$phNum = $_POST['phNum'];
		
		if(empty($first)){
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