<?php
require 'config_sql.php';

$name = $_POST['name'];
$contact = $_POST['contact'];
$paid = $_POST['paid'];
$number = $_POST['number'];

$sum = 0;
//echo $number;
for ($i=1; $i <=$number; $i++) {
	$id = 'id'.$i;
	$quan = 'quantity'.$i;
	$id = $_POST[$id];
	$quan = $_POST[$quan];
	$sql = mysql_query("SELECT * FROM Current_Stock WHERE Id = '$id'");

	$count = mysql_num_rows($sql);
	if($count == 0){
		echo "<script type='text/javascript'>alert('No such item exists with id" .$id."'); location.href = '../view/current_stock.php'</script>";
		exit();
	}
	else{
		$row = mysql_fetch_array($sql);
		
		if($row['Current_quantity'] < $quan){
			echo "<script type='text/javascript'>alert('Quantity less than given quantity for item with id " .$id."'); location.href = '../view/current_stock.php'</script>";
			exit();			
		}
		else{
			$sum = $sum + $quan*$row['Rate'];
		}
	}
}
$date = date('Y/m/d H:i:s');

$sql = mysql_query("INSERT INTO Bills VALUES ( '', '$sum', '$name', '$contact', '$paid', '$date' )");

if($paid == 'Will be paid later'){
	$sql = mysql_query("SELECT * FROM Udhaar WHERE Name = '$name' AND Contact = '$contact' LIMIT 1");
	$count = mysql_num_rows($sql);

	if( $count == 1 ){
		$row = mysql_fetch_array($sql);
		$udhaar = $row['Amount'] + $sum;
		$sql = mysql_query("UPDATE Udhaar SET Amount='$udhaar' WHERE Name = '$name' AND Contact = '$contact'");
	}
	else{
		$sql = mysql_query("INSERT INTO Udhaar VALUES ( '$name', '$sum', '$contact' )");
	}
}
$sql = mysql_query("SELECT * FROM Bills where Name like '$name' ORDER BY Bill_Number DESC"); 


$row = mysql_fetch_array($sql);
$bill = $row['Bill_Number'];

for ($i=1; $i <=$number; $i++) {
	$id = 'id'.$i;
	$quan = 'quantity'.$i;
	$id = $_POST[$id];
	$quan = $_POST[$quan];
	
	$sql = mysql_query("SELECT * FROM Current_Stock WHERE Id = '$id'");
	$row = mysql_fetch_array($sql);
//	echo $row['Current_quantity'];
	$newquan = $row['Current_quantity']-$quan;
	$price = $row['Rate'];
	$sql = mysql_query("UPDATE Current_Stock SET Current_quantity = '$newquan' WHERE Id = '$id'");

	$sql = mysql_query("INSERT INTO Bill_Items VALUES ( '$bill', '$id', '$price', '$quan')");
}
	echo "<script type='text/javascript'>alert('Success'); location.href = '../view/viewbill.php?type=others&number=".$bill."'</script>";

?>
