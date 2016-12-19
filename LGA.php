<?php
	include "db_connect.php";

	header("Content-type: text/xml");
	echo "<?xml version=\"1.0\" ?>\n";
	echo "<LGAs>\n";
	$select = mysql_query("SELECT * FROM localgov");

		while($row = mysql_fetch_array($select)) {
			echo "<LGA>\n\t<id>".$row['id']."</id>\n\t<name>".$row['name']."</name>\n</LGA>\n";
		}

	echo "</LGAs>";
?>