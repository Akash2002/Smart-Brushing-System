<!DOCTYPE html>
<html>
<body>
	<?php
		include 'dbcon.php';
		echo "test";
		$time = 0;
		$time = $_GET["Time"];
    $sql = "INSERT into techfairtable (seconds) Values (".$time.")" ;
		$result = $conn->query($sql);
   	$conn->close();
		?>
</body>
</html>
