<?php
require 'config_sql.php';

$name = $_POST['name'];
$contact = $_POST['contact'];
$amount = $_POST['amount'];

$sql = mysql_query("SELECT * FROM Udhaar WHERE Name = '$name' AND Contact = '$contact' LIMIT 1");

$count = mysql_num_rows($sql);

if( $count == 1 ){
	$row = mysql_fetch_array($sql);
	$udhaar = $row['Amount'] + $amount;
	$sql = mysql_query("UPDATE Udhaar SET Amount='$udhaar' WHERE Name = '$name' AND Contact = '$contact'");
}
else{
	$sql = mysql_query("INSERT INTO Udhaar VALUES ( '$name', '$amount', '$contact' )");
}

if( $sql == false ){
	echo "failed";
}
else{
	echo "<script type='text/javascript'>alert('Successfully Added'); location.href = '../view/credit.php'</script>";
}
?>
