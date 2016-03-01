<?php
require 'config_sql.php';

$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];

$sql = mysql_query("SELECT * FROM Retailers WHERE Name = '$name' AND Address = '$address' AND Contact = '$contact'");

$count = mysql_num_rows($sql);

if($count == 0){
	$sql = mysql_query("INSERT INTO Retailers VALUES ( '', '$name', '$address', '$contact' )");

	if( $sql == false ){
		echo "<script type='text/javascript'>alert('Failed'); location.href = '../view/viewretailers.php'</script>";
	}
	else{
		echo "<script type='text/javascript'>alert('Successfully Added'); location.href = '../view/view_retailer.php'</script>";
	}	
}
else{
	echo "<script type='text/javascript'>alert('Already Exists'); location.href = '../view/retailer.php'</script>";
}
?>