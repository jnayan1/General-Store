<?php
	require 'config_sql.php';


	echo "<h1>Retail Bills</h1>";
	echo "<table class='table'><tr><th>Name of Retailer</th><th>Bill Number</th><th>Date Of Placement</th><th>Total Amount</th><th>Status</th><th></th></tr>'";

	$sql = mysql_query("SELECT * FROM Retail_orders");

	while($row = mysql_fetch_array($sql)){
		$id  = $row['Retailer_Id'];
		$sql1 = mysql_query("SELECT * FROM Retailers WHERE Id= '$id'");
		$row1 = mysql_fetch_array($sql1);
		echo "<td>" .$row1['Name'] . "</td>";
		echo "<td>" .$row['Order_Id'] . "</td>";
		echo "<td>" .$row['Date of Placement'] . "</td>";
		echo "<td>" .$row['Total Amount'] . "</td>";
		$amt = $row['Total Amount'];
		echo "<td>" .$row['Status'] . "</td>";
		echo "<td><button class='edit btn btn-md btn-primary btn-block' onclick='display(\"../view/viewbill.php?type=retail&number=".$row['Order_Id']. "\" )' id = '".$row['Order_Id']."'>View Bill</button></td>";
		echo "</tr>";
	}
	echo "</table>";

	echo "<h1>Mill Bills</h1>";
	echo "<table class='table'><tr><th>Name of Mill</th><th>Bill Number</th><th>Date Of Placement</th><th>Total Amount</th><th>Status</th><th></th></tr>'";

	$sql = mysql_query("SELECT * FROM Mill_orders");
	
	while($row = mysql_fetch_array($sql)){
		$id  = $row['Mill_Id'];
		$sql1 = mysql_query("SELECT * FROM Mills WHERE Id= '$id'");
		$row1 = mysql_fetch_array($sql1);
		echo "<td>" .$row1['Name'] . "</td>";
		echo "<td>" .$row['Order_Id'] . "</td>";
		echo "<td>" .$row['Date placed on'] . "</td>";
		echo "<td>" .$row['Amount'] . "</td>";
		$amt = $row['Amount'];
		echo "<td>" .$row['Status'] . "</td>";
		echo "<td><button class='edit btn btn-md btn-primary btn-block' onclick='display(\"../view/viewbill.php?type=mill&number=".$row['Order_Id']. "\" )' id = '".$row['Order_Id']."'>View Bill</button></td>";
		echo "</tr>";
	}
	echo "</table>";

	echo "<h1>Daily Bills</h1>";
	echo "<table class='table'><tr><th>Name of Buyer</th><th>Phone Number</th><th>Bill Number</th><th>Date Of Placement</th><th>Total Amount</th><th></th></tr>'";

	$sql = mysql_query("SELECT * FROM Bills");
	
	while($row = mysql_fetch_array($sql)){
		echo "<td>" .$row['Name'] . "</td>";
		echo "<td>" .$row['Phone number'] . "</td>";
		echo "<td>" .$row['Bill_Number'] . "</td>";
		echo "<td>" .$row['Date'] . "</td>";
		echo "<td>" .$row['Total price'] . "</td>";
		echo "<td><button class='edit btn btn-md btn-primary btn-block' onclick='display(\"../view/viewbill.php?type=others&number=".$row['Bill_Number']. "\" )' id = '".$row['Bill_Number']."'>View Bill</button></td>";
		echo "</tr>";
	}
	echo "</table>";

?>