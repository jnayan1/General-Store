<?php
require 'config_sql.php';

$sql = mysql_query("SELECT * FROM Udhaar");
	$Count = mysql_num_rows($sql);
	if ($Count == 0) {
		echo "*Invalid username or password";
	}
	else {
		while($row = mysql_fetch_array($sql)){
			echo "<tr>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['Contact'] . "</td>";
			echo "<td>" . $row['Amount'] . "</td>";
   			echo "<td><button class='edit btn btn-md btn-primary btn-block' onclick='del(\"name=".$row['Name']. "&contact=".$row['Contact']."\" )'>Delete</button></td>";
			echo "</tr>";
		}
	}

?>