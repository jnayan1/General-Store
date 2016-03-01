<?php
require 'config_sql.php';

$sql = mysql_query("SELECT * FROM Audit_sheet ORDER BY Year");
if($sql == false)
	echo "failed";
else {
	while($row = mysql_fetch_array($sql)){
		echo "<tr>";
		echo "<td>".$row['Month']."</td>";
		echo "<td>".$row['Year']."</td>";
		echo "<td>".$row['Purchase_amounts']."</td>";
		echo "<td>".$row['Retail_amounts']."</td>";
		echo "<td>".$row['Salary']."</td>";
		echo "<td>".$row['profits']."</td>";
		echo "</tr>";
	}
}

?>