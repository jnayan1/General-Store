<?php
require 'config_sql.php';

$type = $_GET['type'];
$number = $_GET['number'];

if($type == 'retail'){
	$sql = mysql_query("SELECT * FROM Retail_orders WHERE Order_Id = '$number'");
	$row = mysql_fetch_array($sql);
	$id  = $row['Retailer_Id'];
	$sql1 = mysql_query("SELECT * FROM Retailers WHERE Id= '$id'");
	$row1 = mysql_fetch_array($sql1);
	echo "Name of Retailer: " .$row1['Name'] . "<br />";
	echo "Bill Number: " .$row['Order_Id'] . "<br />";
	echo "Date Of Placement: " .$row['Date of Placement'] . "<br />";
	echo "Total Amount: " .$row['Total Amount'] . "<br />";
	$amt = $row['Total Amount'];
	echo "Status: " .$row['Status'] . "<br />";
	$sql = mysql_query("SELECT * FROM Retail_items WHERE Order_Id = '$number'");

}
else if($type == 'mill'){
	$sql = mysql_query("SELECT * FROM Mill_orders WHERE Order_Id = '$number'");
	$row = mysql_fetch_array($sql);
	$id  = $row['Mill_Id'];
	$sql1 = mysql_query("SELECT * FROM Mills WHERE Id= '$id'");
	$row1 = mysql_fetch_array($sql1);
	echo "Name of Mill: " .$row1['Name'] . "<br />";
	echo "Bill Number: " .$row['Order_Id'] . "<br />";
	echo "Date Of Placement: " .$row['Date placed on'] . "<br />";
	echo "Total Amount: " .$row['Amount'] . "<br />";
	$amt = $row['Amount'];
	echo "Status: " .$row['Status'] . "<br />";
	$sql = mysql_query("SELECT * FROM Mill_Items WHERE Order_Id = '$number'");
}
else{
	$sql = mysql_query("SELECT * FROM Bills WHERE Bill_Number = '$number'");
	$row = mysql_fetch_array($sql);
	echo "Name of Buyer: " .$row['Name'] . "<br />";
	echo "Phone number of Buyer: " .$row['Phone number'] . "<br />";
	echo "Bill Number: " .$row['Bill_Number'] . "<br />";
	echo "Date Of Placement: " .$row['Date'] . "<br />";
	echo "Total Amount: " .$row['Total price'] . "<br />";
	$amt = $row['Total price'];
	$sql = mysql_query("SELECT * FROM Bill_Items WHERE Bill_Number = '$number'");

}
echo "<table class='table'><tr><th>Commodity Id</th><th>Commodity Name</th><th>Price</th><th>Quantity</th><th>Total Price</th></tr>'";

while($row = mysql_fetch_array($sql)){
	echo "<tr>";
	echo "<td>".$row["Commodity Id"] . "</td>";
	$id = $row["Commodity Id"];
	$sql1 = mysql_query("SELECT * FROM Current_Stock WHERE Id = '$id' LIMIT 1");
	$row1 = mysql_fetch_array($sql1);
	echo "<td>".$row1["Name"] . "</td>";
	echo "<td>".$row["Price"] . "</td>";
	echo "<td>".$row["Quantity"] . "</td>";
	$var = $row['Quantity']*$row['Price'];
	echo "<td>".$var."</td>";
	echo "</tr>";
}

echo '<tr><td></td><td></td><td></td><td></td><td>'.$amt.'</td></tr>';

echo "</table>";
?>