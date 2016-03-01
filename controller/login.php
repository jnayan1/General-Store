<?php

require 'config_sql.php';

$username=$_POST['username'];
$password=$_POST['password'];

if($username == "" || $password == "")
{
	die ("*Input fields empty.");
}

session_start();

$username = preg_replace('#[^A-Za-z0-9._]#i', '', $username);

$sql = mysql_query("SELECT * FROM Employee WHERE Id = '$username' AND Password = '$password' LIMIT 1");
$Count = mysql_num_rows($sql);
if ($Count == 0) {
	echo "*Invalid username or password";
}
else {
	$row = mysql_fetch_array($sql);
	$_SESSION['name'] = $row['Name'];
	$_SESSION['type'] = $row['Department'];
	$_SESSION['views'] = 1;
	
	if($row['Department']=='Owner'){
		echo "<script type='text/javascript'>location.href ='../view/current_stock.php'</script>";
	}
	else{
		echo "<script type='text/javascript'>location.href ='../view/current_stock.php'</script>";
	}
}

?>