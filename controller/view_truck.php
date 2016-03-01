<?php
require 'config_sql.php';

$sql = mysql_query("SELECT * FROM Truck_Info");
if($sql == false)
	echo "failed";
else {
	while($row = mysql_fetch_array($sql)){
		echo "<tr>";
		echo "<td>".$row['Truck_Number']."</td>";
		$id = $row['Driver_Id'];
		$sql1 = mysql_query("SELECT * FROM Employee where Id = '$id'");
		$row1 = mysql_fetch_array($sql1);
		echo "<td>".$id."</td>";

		echo "<td>".$row1['Name']."</td>";

		echo "<td>".$row['Current_Status']."</td>";
		echo "<td><button class='edit btn btn-lg btn-primary btn-block' onclick='display(\"".$row['Truck_Number']. "\" 	)' id = '".$row['Truck_Number']."'>Edit</button></td>";
		echo "</tr>";
	}
}

?>