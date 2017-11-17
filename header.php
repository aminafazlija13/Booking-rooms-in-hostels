<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rezervacije</title>
	<link rel="stylesheet" type="text/css" href="stylesheet6.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">HOME</a></li>
					<?php
						if(isset($_SESSION['id'])){
							echo "<form action='includes/logout.inc.php'>
									<button type='submit'>LOG OUT</button>
								</form>";
							echo "<li><a href='settings.php'>SETTINGS</a></li>";
						}	
						else{
						echo "<form action='includes/login.inc.php' method='POST'>
								<input type='text' name='uid' placeholder='Username'>
								<input type='password' name='pwd' placeholder='Password'>
								<button type='submit'>LOG IN</button>
							</form>";
						echo "<li><a href='signup.php'>SIGN UP</a></li>";
						}
					?>
			</ul>
		</nav>
	</header>
	</body>
	</html>