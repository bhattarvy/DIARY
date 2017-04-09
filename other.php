
<?php 
  $conn=mysql_connect("localhost","arvy");
 
  
  mysql_select_db('ar_db');
if( $_POST["date"] || $_POST["content"] ){
$date=$_POST['date'];$content=$_POST['content'];}
$name=$_SESSION['name'];
$sql="insert into diary values('$name','$date','$content')";
$retval=mysql_query($sql,$conn);
if($retval==1){
echo("content entered");}
else{
echo("content not entered");
}
error_reporting(E_ALL & ~E_NOTICE )
?>
