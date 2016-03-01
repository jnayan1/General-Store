<?php
require 'config_sql.php';

$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$salary = $_POST['salary'];
$department = $_POST['department'];
$password = $_POST['password'];

$sql = mysql_query("SELECT * FROM Employee WHERE Name = '$name' AND Address = '$address' AND Contact = '$contact'");

$count = mysql_num_rows($sql);

if($count == 0){
	$sql = mysql_query("INSERT INTO Employee VALUES ( '', '$name', '$address', '$contact', '$salary', '$department','$password' )");

	if( $sql == false ){
		echo "<script type='text/javascript'>alert('Failed'); location.href = '../view/viewemployee.php'</script>";
	}
	else{
		echo "<script type='text/javascript'>alert('Successfully Added'); location.href ='../view/view_employee.php'</script>";
	}
}	
else{
	echo "<script type='text/javascript'>alert('Employee Already Exists'); location.href ='../view/employee.php'</script>";
}
?>