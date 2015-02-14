<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'storedInfo.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	 <meta http-equiv="refresh" content="0;url=PHP Assignment 2.php"> <!--//auto redirect code from  http://stackoverflow.com/questions/5411538/redirect-from-an-html-page -->
	<title>Eric Miller PHP assignment 2</title>
  </head>
<body></body>
<?php
$row = $_POST['input'];
$out_rented = ''; //holds check out status

$mysqli = new mysqli("oniddb.cws.oregonstate.edu","millerer-db",$password,"millerer-db");
	if ($mysqli->connect_errno) {
		echo"My SQL connection failed.";
	}
	else{ //code in this block from http://us2.php.net/manual/en/mysqli.quickstart.prepared-statements.php as well as week 6 lecture
		if(!($stmt = $mysqli->prepare("SELECT rented FROM php_assignment WHERE id =".$row))){
			echo "Prepare Failed1";
		}
		if(!($stmt->execute())){
			echo "Execute failed";
		}
		if (!($stmt->bind_result($out_rented))){
			echo "Binding failed";
		}
		$stmt->fetch();
		$stmt->close();
		if ($out_rented == 0){
			if(!($stmt = $mysqli->prepare("UPDATE php_assignment SET rented = TRUE WHERE id = ?"))){
					echo "Prepare Failed2<br>";
			}
			if(!($stmt->bind_param('s',$row))){ //syntax from http://us2.php.net/manual/en/mysqli-stmt.bind-param.php
					echo "Bind Failed<br>";
			}
			if (!$stmt->execute()) {
				echo "Execute failed<br>";
			}
			//echo "CHECKED OUT";
		}
		else {
			if(!($stmt = $mysqli->prepare("UPDATE php_assignment SET rented = FALSE WHERE id = ?"))){
				echo "Prepare Failed3<br>";
			}

			if(!($stmt->bind_param('s',$row))){ //syntax from http://us2.php.net/manual/en/mysqli-stmt.bind-param.php
					echo "Bind Failed<br>";
			}
			if (!$stmt->execute()) {
				echo "Execute failed<br>";
			}
			//echo "CHECKED IN";
		}

	}
?>
