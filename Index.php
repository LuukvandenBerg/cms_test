<?php
	include('includes/db.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>CMS TEST</title>
	<meta charset="utf-8">
	<link rel="StyleSheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Bungee|Roboto" rel="stylesheet">
</head>
<body>
	<h1>cms test</h1>
	<a href="cms/show.php">Admin</a><br><br>
	<?php
		require_once('models/select.php');
	?>
</body>
</html>