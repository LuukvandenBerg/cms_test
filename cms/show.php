<?php
	require_once('../includes/db.php');

	$sql = 'SELECT * FROM test';
	$result = $mysqli->query($sql);

	echo "Click on an id to delete the content<br><br>";

	while($row = $result->fetch_assoc()){
		echo "id: ".$row['id']."<a href='delete.php?id=".$row['id']."'>DELETE</a> <a href='edit.php?id=".$row['id']."'>EDIT</a><br>";
		echo "Schoolname: ".$row['Test1']."<br>";
		echo "City: ".$row['Test2']."<br>";
		echo "Level: ".$row['Test3']."<br><br>";
	}

	echo "<a href='add.php'>ADD</a><br><br>";
	echo "<a href='../index.php'>Homepage</a>";

?>