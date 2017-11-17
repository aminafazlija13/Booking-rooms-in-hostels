<?php
	include'header.php';
?>

<?php
	
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	
	if(strpos($url, 'error=emptyF') !== false){
		echo "Please enter your first name!";
	}
	elseif(strpos($url, 'error=emptyL') !== false){
		echo "Please enter your last name!";
	}
	elseif(strpos($url, 'error=emptyU') !== false){
		echo "Please enter the Username!";
	}
	elseif(strpos($url, 'error=emptyE') !== false){
		echo "Please enter your e-mail address!";
	}
	elseif(strpos($url, 'error=emptyP') !== false){
		echo "You need to choose the password!";
	}	
	elseif(strpos($url, 'error=username') !== false){
		echo "Username already exists!";
	}
	if (isset($_SESSION['id'])){
		echo "Hi there user!";
	}
	else {
		echo "You are not logged in!";
		}
	if (isset($_SESSION['id'])){
		echo "You are already logged in!";
	}
	else {
		echo "<form action='includes/signup.inc.php' method='POST'><br>
				<input type='text' name='first' placeholder='First name'><br>
				<input type='text' name='last' placeholder='Last name'><br>
				<input type='text' name='email' placeholder='E-mail'><br>
				<input type='text' name='uid' placeholder='Username'><br>
				<input type='password' name='pwd' placeholder='Password'><br>
				<input type='text' name='phNum' placeholder='Phone number'><br>
				<input type='text' name='city' placeholder='City'><br>
				<input type='text' name='postCode' placeholder='Postal code'><br>
				<input type='text' name='street' placeholder='Street'><br>
				<button type='submit'>SIGN UP</button>
			</form>";
		}
?>	
</body>
</html>
