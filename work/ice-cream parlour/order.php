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
function charonly(myfield, e, dec)
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
	else if ((("abcdefghijklmnopqrstuvwxyz").indexOf(keychar) > -1))
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
	nme=document.frm.name.value;
	if(isNaN(nme)==false)
	{
		alert("Enter Proper Name");
		document.frm.name.focus();
		document.frm.name.value="";	
		return false;	
	}
	
	

	cont=document.frm.contact_no.value;
	if(isNaN(cont)==true || cont=="")
	{
		alert("Enter Proper Contect_No");
		document.frm.contact_no.focus();
		document.frm.contact_no.value="";	
		return false;
	}
	bill=document.frm.bill_no.value;
	if(bill=="")
	{
		alert("Enter Proper Bill_No");
		document.frm.bill_no.focus();
		document.frm.bill_no.value="";	
		return false;
	}
	addr=document.frm.address.value;
	if(addr=="")
	{
		alert("Enter Proper Address");
		document.frm.address.focus();
		document.frm.address.value="";	
		return false;
	}
	cty=document.frm.city.value;
	if(isNaN(cty)==false || cty=="")
	{
		alert("Enter Proper City");
		document.frm.city.focus();
		document.frm.city.value="";	
		return false;	
	}
	qty=document.frm.quantity.value;
	if(qty=="")
	{
		alert("Enter Proper Quantity");
		document.frm.quantity.focus();
		document.frm.quantity.value="";	
		return false;	
	}

	
}






</script>
<?php
include("header.php");
$img=$_GET['path'];
?>

<html>
<body>
<?php
include("connection.php");
?>
<div id="page">
		<div id="content">
				
				<div class="post">

				<p class="meta"></p>
<div class="entry"><p>
<h1 align="center"style="font-size:37px;color:#556611;font-family:monotype corsiv"><u>Order</h1> </u></center><br>
<table height="60%" width="50%" border="3"  align="center"cellspacing="8" bordercolor="#FF3366">
<tr>
<form name="frm" action="bill.php" method="GET" ONSUBMIT="return chkval()">
<tr>
<td align="center" style="font-size:19px; color:brown;font-family:monotype corsiv">Description:-</td>
<td><div><input readonly="" value="<?php echo $_GET['name'];?>" name="name"type="name"size="70"/></div>
<tr>
<td align="center"style="font-size:19px; color:brown;font-family:monotype corsiv">Name</td>
 <td><div><input class="input_txt" value="" name="name"type="text"size="70"  onKeyPress="return charonly(this, event)"/></div>
<tr>
<td align="center"style="font-size:19px; color:brown;font-family:monotype corsiv">Contact_no:-</td>
 <td><div><input class="input_txt" value="" name="contact_no"type="text"size="70" maxlength="10" onKeyPress="return numbersonly(this, event)"/></div>
<tr>
<td align="center"style="font-size:19px; color:brown;font-family:monotype corsiv">Bill_no:-</td>
<td><div><input class="input_txt" value="" name="bill_no" type="text"size="70" onKeyPress="return numbersonly(this, event)"/></div>
<tr>
<td align="center"style="font-size:19px; color:brown;font-family:monotype corsiv">Address</td>
<td><div><input class="input_txt"   name="address" type=""size="70" /></div>
<tr>
 <td align="center"style="font-size:19px; color:brown;font-family:monotype corsiv">City:-</td>
<td><div><input class="input_txt" value="" name="city"type="text"size="70"  onKeyPress="return charonly(this, event)"/></div>
<tr>
<td align="center"style="font-size:19px; color:brown;font-family:monotype corsiv">Image:-</td>	
<td><div>
<img src="<?php echo $img;?>"/>
<tr>
<td align="center"style="font-size:19px; color:brown;font-family:monotype corsiv">Price:-</td>
<td><div><input readonly="" value="<?php echo $_GET['price'];?>" name="price" type="price"size="70"/></div>
	   </td></tr>
	   
<td align="center"style="font-size:19px; color:brown;font-family:monotype corsiv">Quantity:-</td>
<td><div><input class=""  name="quantity"type="quantity"size="70" onKeyPress="return numbersonly(this, event)"/></div>
	   </td></tr>



	<td>
	<tr> 
						 <td height="69"><center><font color="#556611" size="7"><input type="reset"  name="reset"value="Reset All" size="50" style="background:url(images/navigation_bg.png); width:85px; height:35px; color:#66FF99;cursor:hand;" /></center></td>
						<td colspan=3 align="center"><input type="Submit" name="s1" value="Submit" size="50" style="background:url(images/navigation_bg.png); width:85px; height:35px; color:#66FF99;cursor:hand;"/></td>
					  </tr>
</center></form></table>
<br>
<br>
<?php include("footer.php");?> 

</body>
</html>     
