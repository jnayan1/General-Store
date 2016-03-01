<?php
require 'config_sql.php';

$sql = mysql_query("SELECT * FROM Mills");
if($sql == false)
  echo "failed";
else {
  while($row = mysql_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$row['Id']."</td>";
    echo "<td>".$row['Name']."</td>";
    echo "<td>".$row['Address']."</td>";
    echo "<td>".$row['Contact']."</td>";
    echo "<td>".$row['Commodities_Supplied']."</td>";
    echo "<td><button class='edit btn btn-lg btn-primary btn-block' onclick='display(".$row['Id'].")' id = '".$row['Id']."'>Edit</button></td>";
    echo "</tr>";
  }
}

?>