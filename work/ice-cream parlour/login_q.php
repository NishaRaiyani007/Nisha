<?php
session_start();
include("connection.php");

@$username=$_POST[u1];
@$password=$_POST[pa1];
$s="select *from login";
$res=mysql_query($s)or die("can't select");
while($row=mysql_fetch_array($res))
{
   $u1=$row[0];
   $p1=$row[1];
} 
if($username===$u1 && $password===$p1)
{  
	include("admin1.php");
	$_SESSION['username']=$u1;	
}
else
{
	include("index.php");
	
}
?>
