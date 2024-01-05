<script>
function numbersonly(myfield, e, dec)
{
	var key;
	var keychar;
	
	if (window.event)
	   key = window.event.keyCode;
	else if (e)
	   key = e.which;
	else
	   return true;
	keychar = String.fromCharCode(key);
	
	if ((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27))
	   return true;
	else if ((("0123456789").indexOf(keychar) > -1))
	   return true;
	else if (dec && (keychar == "."))
   	 {
	   myfield.form.elements[dec].focus();
	   return false;
	}
	else
	   return false;
}
function chkval()
{
	cred=document.frm.creditcard_no.value;
	if(cred=="")
	{
		alert("Enter Proper Creditcard_no");
		document.frm.creditcard_no.focus();
		document.frm.creditcard_no.value="";	
		return false;
	}
}
</script>
<?php
include("header.php");
//$description;$contect_no;$city;$price;$quantity;
$price=$_GET['price'];
$quantity=$_GET['quantity'];
?>
<html>
<body>
<div id="page">
		<div id="content">
				
				<div class="post">
			<p class="meta"></p>
<div class="entry"><p>
<h1 align="center"style="font-size:35px;color:#556611;font-family:monotype corsiv"><u>Bill</h1> </u></center>
<table width="60%" height="400" border="2" bordercolor="#FF3366" align="center">
<tr>
<form name="frm"  action="in_bill.php" method="GET" ONSUBMIT="return chkval()">

<td align="center" style="font-size:19px; color:brown;font-family:monotype corsiv">Bill_no:-</td>
<td><div><input class="input_txt" value="<?php echo $_GET['bill_no'];?>" name="bill_no" type=""size=32/></div>
<tr>
<td align="center" style="font-size:19px; color:brown;font-family:monotype corsiv">Creditcard_no:-</td>
<td><div><input class="input_txt" value="" name="creditcard_no" type=""size=32 onKeyPress="return numbersonly(this, event)"/></div>
<tr>
<td align="center" style="font-size:19px; color:brown;font-family:monotype corsiv">Name:-</td>
<td><div><input readonly="" value="<?php echo $_GET['name'];?>" name="name" type=""size=32/></div>
<tr>
<td align="center" style="font-size:19px; color:brown;font-family:monotype corsiv">Contact_no:-</td>
<td><div><input readonly="" value="<?php echo $_GET['contact_no'];?>" name="contact_no" type="" onKeyPress="return numbersonly(this, event)"size=32/>
</div>
<tr>
<td align="center"style="font-size:19px; color:brown;font-family:monotype corsiv">Address:-</td>
<td><div><input readonly="" value="<?php echo $_GET['address'];?>" name="address" type="" size=32/></div>
<tr>
<td align="center" style="font-size:19px; color:brown;font-family:monotype corsiv">City:-</td>
<td><div><input readonly="" value="<?php echo $_GET['city'];?>" name="city" type=""size=32/></div>
<tr>
<td align="center" style="font-size:19px; color:brown;font-family:monotype corsiv">Total Amount:- </td>
<td><div><input class="input_txt" value="<?php echo $price*$quantity;?>" name="total_amount" type=""size=32/></div>
</td>
</tr>

  
<td colspan=3 align="center"><input type="Submit" name="s1" value="Submit" size="50" style="background:url(images/navigation_bg.png); width:85px; height:35px; color:#66FF99;cursor:hand;"/></td>
</table>
</form>
<br>
<br>
<?php
include("footer.php");
 ?> 
</body>
</html> 
<script>
function next()
{
	window.location = "feedback1.php";
}

</script>
