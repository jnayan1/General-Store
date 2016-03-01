<?php
require 'config_sql.php';

$sql = mysql_query("SELECT * FROM Current_Stock");
if($sql == false)
	echo "failed";
else {
	while($row = mysql_fetch_array($sql)){
		echo "<tr>";
		echo "<td>".$row['Id']."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Supplier']."</td>";
		echo "<td>".$row['Current_quantity']."</td>";
		echo "<td>".$row['Threshold quantity']."</td>";
		echo "<td>".$row['Rate']."</td>";
		echo "</tr>";
	}
}

?>