<?php
require 'config_sql.php';

$name = $_POST['retailer'];
$duedate = $_POST['duedate'];
$status = $_POST['status'];
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
		echo "<script type='text/javascript'>alert('No such item exists with id " .$id."'); location.href = '../view/current_stock.php'</script>";
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

$sql = mysql_query("INSERT INTO Retail_orders VALUES ('', '$name', '$date', '$duedate', '$sum', '$status' )");

$sql = mysql_query("SELECT * FROM Retail_orders where Retailer_Id like '$name' ORDER BY Order_Id DESC"); 

$row = mysql_fetch_array($sql);
$bill = $row['Order_Id'];

for ($i=1; $i<=$number; $i++) {
	$id = 'id'.$i;
	$quan = 'quantity'.$i;
	$id = $_POST[$id];
	$quan = $_POST[$quan];

	$sql = mysql_query("SELECT * FROM Current_Stock WHERE Id = '$id'");
	$row = mysql_fetch_array($sql);
	$newquan = $row['Current_quantity']-$quan;
	$price = $row['Rate'];
	$sql = mysql_query("UPDATE Current_Stock SET Current_quantity = '$newquan' WHERE Id = '$id'");

	$sql = mysql_query("INSERT INTO Retail_items VALUES ( '$bill', '$id', '$price', '$quan')");
	echo "<script type='text/javascript'>alert('Success'); location.href = '../view/viewbill.php?type=retail&number=".$bill."'</script>";

}
?>