<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'storedInfo.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<title>Eric Miller PHP assignment 2</title>
  </head>
<body>
    <form name = "post_form" method = "post">
	  <label> Video Name: </label> 
	  <input type = "text" name ="vid_name"> <br>
	  <label> Video Category: </label> 
	  <input type = "text" name ="vid_cat"> <br>
	  <label> Video Length: </label> 
	  <input type = "number" name ="vid_len"> <br>
	  <p><input type="submit" value ="Add Video" name="entry" /></p>
	</form>
    <br><br>
	<div>
<?php
	if (isset($_POST['entry'])){ //syntax form http://www.homeandlearn.co.uk/php/php4p7.html
		if (empty($_POST['vid_name'])){
			echo "Video name field must be entered to add a video.<br><br>";
		}	
		else if ($_POST['vid_len'] < 0){
			echo "<br>ERROR: Video length cannot be less than 0.<br><br>";
		}

		else{

		}
	}
	
	
	//below SQL connection code and syntax from week 6 lecture
	$mysqli = new mysqli("oniddb.cws.oregonstate.edu","millerer-db",$password,"millerer-db");
	if ($mysqli->connect_errno) {
		echo"My SQL connection failed.";
	}
	else{ //code in this block from http://us2.php.net/manual/en/mysqli.quickstart.prepared-statements.php as well as week 6 lecture
		echo "CONNECTED TO SQL! <br>";
		if(!($stmt = $mysqli->prepare("SELECT id, name, category, length, rented FROM php_assignment"))){
			echo "Prepare Failed";
		}
		if(!($stmt->execute())){
			echo "Execute failed";
		}
		$res = $stmt->get_result();
		$out_id = null;
		$out_name = null;
		$out_category = null;
		$out_length = null;
		$out_rented = null;
		if (!($stmt->bind_result($out_id, $out_name, $out_category, $out_length, $out_rented))){
			echo "Binding failed";
		}
		echo '<p><h2>Videos</h2><p>
			  <table border="1">
			  <tr><td>ID<td>Name<td>Category<td>Length<td>Rented';
		$i = 0; //used for marking rows in HTML so that they can be reference later
		/*while ($stmt->fetch()){
			echo "<tr> <td>".$out_id."<td>".$out_name."<td>".$out_category."<td>".$out_length"<td>".$out_rented.
				"<form name = \"post_form".$out_id."\" method = \post\">
				<input type=\"submit".$out_id."\" value =\"Delete\" name=\"".$out_id."\" />
				</form>
				<br>";*/
	}


?>
    </div>
</body>