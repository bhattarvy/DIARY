<html>
<head>
 <style>
   body {
     background-color: green;
     }
</style>
</head>
<body>
<h1>OLD DIARY IS HERE</h1>
<?php
  $conn=mysql_connect("localhost","arvy");
  mysql_select_db('ar_db');
  $name=$_SESSION['name'];
  
  $sql="select name ,content from diary where name='$name'";
 $retval=mysql_query($sql,$conn);

 while($row=mysql_fetch_array($retval)){
   echo($row['name']);echo "=";

   echo($row['content']); 
echo "<br><br><br>";
}
?>
</body>
</html>
