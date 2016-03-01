<?php
require 'config_sql.php';

$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$commodities = $_POST['commodities'];

$sql = mysql_query("SELECT * FROM Mills WHERE Name = '$name' AND Address = '$address' AND Contact = '$contact'");

$count = mysql_num_rows($sql);

if($count == 0){
	$sql = mysql_query("INSERT INTO Mills VALUES ( '', '$name','$commodities', '$contact','$address' )");

	if( $sql == false ){
		echo "<script type='text/javascript'>alert('Failed'); location.href = '../view/view_mils.php'</script>";
	}
	else{
		echo "<script type='text/javascript'>alert('Successfully Added'); location.href = '../view/view_mills.php'</script>";
	}	
}
else{
	echo "<script type='text/javascript'>alert('Already Exists'); location.href = '../view/mill.php'</script>";
}
?>