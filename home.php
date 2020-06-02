<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link href="text/homeStyle.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body class="loggedin">
	<nav class="navtop">
		<div>
			<h1>Website Title</h1>
			<a href="https://not4you.se/profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			<a href="https://not4you.se/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			<a href="https://not4you.se/blank-page.html"><i class="fas-fa-sign-out-alt"> </i>Test</a>
		</div>
	</nav>
	<div class="content">
		<h2>Home Page</h2>
		<p>Welcome back, <?= $_SESSION['name'] ?>!</p>

	</div>

	<div>
		<form action="https://not4you.se/upload.php" method="post" enctype="multipart/form-data">
			Select image to upload:
			<input type="file" name="file" id="file">
			<input type="submit" value="Upload Image" name="submit">
		</form>
	</div>

	
</body>

</html>