<html>

<body>
  <?php
      $conn=mysql_connect("localhost","arvy");
if(!$conn){echo("could not connect");}
      mysql_select_db('ar_db');
 $name=$_POST['name']; $age=$_POST['age']; $email=$_POST['email']; $password=$_POST['password'];
      $state="INSERT INTO signup VALUES('$name','$age','$email','$password')";
      $retval=mysql_query($state,$conn);
     

?>
<h1>you are signedup</h1>
<a href="index.php">GO TO LOGIN PAGE </a>



</body>
