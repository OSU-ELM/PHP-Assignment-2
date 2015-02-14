<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'storedInfo.php';
?>
<html>
  <head>
    <meta charset="UTF-8">
	 <meta http-equiv="refresh" content="0;url=PHP Assignment 2.php"> <!--//auto redirect code from  http://stackoverflow.com/questions/5411538/redirect-from-an-html-page -->
	<title>Eric Miller PHP assignment 2</title>
  </head>
<body></body>
<?php
$mysqli = new mysqli("oniddb.cws.oregonstate.edu","millerer-db",$password,"millerer-db");
	if ($mysqli->connect_errno) {
		echo"My SQL connection failed.";
	}
	else{ //code in this block from http://us2.php.net/manual/en/mysqli.quickstart.prepared-statements.php as well as week 6 lecture
		if(!($stmt = $mysqli->prepare("DELETE FROM php_assignment"))){
			echo "Prepare Failed3<br>";
		}

		if (!$stmt->execute()) {
			echo "Execute failed<br>";
		}
			
		}
	
?>