<?php
$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if(!empty($_POST["username"]) && !empty($_POST["password"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		if($username == 'simon' && $password == 'test') {
			session_start();
			$_SESSION["authenticated"] = 'true';
			header('Location: index.php');
		}
		else {
			header('Location: login.php');
		}
		
	} else {
		header('Location: login.php');
	}
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>LOGIN PHP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="page">
	<!-- [banner] -->
	<header id="banner">
		<hgroup>
			<h1>LOGIN</h1>
		</hgroup>		
	</header>
	<!-- [content] -->
	<section id="content">
		<form id="login" method="post">
			<label for="username">Username:</label>
			<input id="username" name="username" type="text" required>
			<label for="password">Password:</label>
			<input id="password" name="password" type="password" required>					
			<br />
			<input type="submit" value="Login">
		</form>
	</section>
	<!-- [/content] -->
	
</div>
<!-- [/page] -->
</body>
</html>
<?php } ?>
