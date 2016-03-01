
<?php
require 'config_sql.php';

$month = $_POST['month'];
$year = $_POST['year'];
$retail = $_POST['retail'];
$purchase = $_POST['purchase'];
$salary = $_POST['salary'];

$total = $retail - $purchase - $salary;

$sql = mysql_query("SELECT * FROM Audit_sheet WHERE Month = '$month' AND Year = '$year' LIMIT 1");

$count = mysql_num_rows($sql);

if( $count == 1 ){

	$row = mysql_fetch_array($sql);
	$sql = mysql_query("UPDATE Audit_sheet SET profits='$total', Retail_amounts='$retail', Purchase_amounts='$purchase', Salary='$salary' WHERE Month LIKE '$month' AND Year = '$year'");
}
else{
//	echo $month . $year . $retail . $purchase . $total . $salary;
	$sql = mysql_query("INSERT INTO Audit_sheet VALUES( '$month', '$retail', '$purchase', '$salary', '$total', '$year' )");
}

if( $sql == false ){
	echo "failed";
}
else{
	echo "<script type='text/javascript'>alert('Successfully Added'); location.href = '../view/view_audit_sheet.php'</script>";
}
?>