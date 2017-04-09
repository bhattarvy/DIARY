
<html>
<head>
 <meta charset="utf-8"/>
 <style>
   #main{
        height:400px;
        text-align:center;}
    </style>
</head>
<body>
<?php
  $conn=mysql_connect("localhost","arvy");
  mysql_select_db('ar_db');
  $name=$_POST['name']; $password=$_POST['password'];
  $sql="select name from signup";
  $retval=mysql_query($sql,$conn);
  echo($retval);$b=0;
while($row=mysql_fetch_array($retval,MYSQLI_BOTH)){
echo "<br>";
echo(count($row));
if($name==$row['name']){
echo($row['name']); 
$name=$row['name'];
$_SESSION['name']=$name;
break;
}
$b++;}
echo($b);
if($b==$a+1){echo("not found");
header("location:index.php");
}
?>
<form action="other.php"  method="post">
 date:<input type="text" value="date" id="date"name="date">
content:<textarea id="content" name="content"></textarea>
 <input type="submit" value="submit">
</form>
<a href="prev.php">for prev diary you entered click here</a>s
</body>
</html>



 



