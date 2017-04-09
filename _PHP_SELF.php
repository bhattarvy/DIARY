<?php

$conn = mysql_connect('127.0.0.1', 'arvy');
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}
$emp_name=$_POST['username'];
$emp_address=$_POST['pass'];

$sql = "INSERT INTO php "."VALUES('$emp_name','18','$emp_address','2392392')";
mysql_select_db('ar_db');
$retval = mysql_query( $sql, $conn );
if(retval){
echo"data enteree correctly";
}
?>
