<?php
require 'config_sql.php';

$name = $_GET['name'];
$contact = $_GET['contact'];

$sql = mysql_query("DELETE FROM Udhaar WHERE Name='$name' AND Contact='$contact'");

if($sql == false){
	echo "<script type='text/javascript'>alert('Could not delete');location.href ='../view/view_udhaar.php'</script>";
}
else{
	echo "<script type='text/javascript'>alert('Deleted successfully');location.href ='../view/view_udhaar.php'</script>";
}
?>