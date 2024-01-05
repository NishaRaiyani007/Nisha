
<?php 
    include("connection.php");
    header("location:flavors.php");
	if(isset($_POST['sign']))
	{
		@$user=$_POST['nm'];
		@$ps=$_POST['pass1'];
		@$cps=$_POST['cpass'];
		@$fn=$_POST['fname'];
		@$ln=$_POST['lname'];
		@$ad=$_POST['add'];
		@$pno=$_POST['phone'];
		@$emid=$_POST['eid'];
		@$ead=$_POST['ead'];
		@$ct=$_POST['city'];
		@$pincode=$_POST['pcode'];
		@$coun=$_POST['contry'];

$query="INSERT INTO `sign_up` values('$user','$ps','$cps','$fn','$ln','$ad','$pno','$emid','$ead',' $ct','$pincode','$coun')";
		echo "<br>{$query}<br>";
		
		mysql_query($query);
		
		echo mysql_error(); exit;


	
		
	}
	
?>
<!--<body onLoad="locat()">
</body>

<script>
function locat()
{
	window.location = "signup.php";
}
</script>-->