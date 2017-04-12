
<html>
<head>
 <meta charset="utf-8"/>
 <style>
     body{
         background-color: bisque;
     }
     #top{
         background-color: darkblue;
         height: 250px;
         margin-top: -20px;
         color: azure;
         text-align: center;
     }
     form{
         width: 50%;
         position: absolute;
         left: 25%;
         
     }
    </style>
</head>
<body>
    <div id="top">
    <h1>Write Exciting Moments</h1>
    
    </div>
<?php
  $conn=mysql_connect("localhost","arvy");
  mysql_select_db('ar_db');
  $name=$_POST['name']; $password=$_POST['password'];
  $sql="select name from signup";
  $retval=mysql_query($sql,$conn);
$b=0;
while($row=mysql_fetch_array($retval,MYSQLI_BOTH)){
echo "<br>";

if($name==$row['name']){
 
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
<fieldset>
    <legend>Write here</legend>
 date:<input type="text" value="date" id="date"name="date"><br><br><br>
content:<textarea id="content" name="content"></textarea>
    <p>you can enlarge this space of writing</p><br><br><br><br><br><br><br>
 <input type="submit" value="submit">
    
    <br><br><br>
  <a href="prev.php">for prev diary you entered click here</a>
    </fieldset>
</form>



</body>
</html>



 



