<?php
	include "db_connect.php";

	header("Content-type: text/xml");

	$cat_id = $_POST['cat'];

	echo "<?xml version=\"1.0\" ?>\n";
	echo "<types>\n";
	$select = mysql_query("SELECT * FROM farm_type WHERE farmcat_id = '$cat_id'");

		while($row = mysql_fetch_array($select)) {
			echo "<type>\n\t<id>".$row['id']."</id>\n\t<name>".$row['description']."</name>\n</type>\n";
		}

	echo "</types>";
?>