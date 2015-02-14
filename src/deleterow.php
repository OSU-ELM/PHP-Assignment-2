<?php
$row = $_POST['input'];
echo $row ;

/*$mysqli = new mysqli("oniddb.cws.oregonstate.edu","millerer-db",$password,"millerer-db");
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
		while ($stmt->fetch()){
			$checkin ='';
			if ($out_rented == 0){
				$checkin = "checked in";
			}
			else {
				$checkin = "checked out";
			}
			echo '<tr> <td>'.$out_id.'<td>'.$out_name.'<td>'.$out_category.'<td>'.$out_length.'<td>'.$checkin.
				'<td><form name = \"post_delete_form'.$out_id.'\" method = \"post\" action = \'deleterow.php\'>
				<p><input type="submit" value =Delete name="'.$out_id.'" /><p>
				</form>
				<form name = \"post_checkin_form'.$out_id.'\" method = \"post\" action = \'editPage.php\'>
				<p><input type="submit" value =Check in/out name="'.$out_id.'" /><p>
				</form>
				<br>';
		}

	}*/
?>