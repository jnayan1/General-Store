<?php

require 'config_sql.php';

$number = $_POST['number'];
$driver = $_POST['driver'];
$current = $_POST['current'];

$sql = mysql_query("UPDATE Truck_Info SET Driver_Id = '$driver', Current_Status = '$current' WHERE Truck_Number = '$number'");

if($sql == false){
	echo "<script type='text/javascript'>alert('Error in updating'); </script>";
}
else {
	echo "<script type='text/javascript'>alert('Successfully Updated'); location.href = '../view/Truck.php';</script>";
}

?>