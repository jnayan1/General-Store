<?php

require 'config_sql.php';

$name = $_POST['name'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$salary = $_POST['salary'];
$empid = $_POST['id'];
$department = $_POST['department'];

$sql = mysql_query("UPDATE Employee SET Name = '$name', Address = '$address', Contact = '$contact', Salaries = '$salary', Department='$department' WHERE Id = '$empid'");

if($sql == false){
	echo "<script type='text/javascript'>alert('Error in updating'); </script>";
}
else {
	echo "<script type='text/javascript'>alert('Successfully Updated'); location.href = '../view/view_employee.php';</script>";
}

?>