<script>
function banner()
{
	ch=msg.charAt(0);
	msg=msg.substring(1,msg.length);
	msg=msg+ch;
     window.status=msg;
	document.title=msg;
	t=setTimeout("banner()",500);
	

}


</script>

<body onLoad="banner()">



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


function not_empty(field,alerttxt)
{
	with(field)
	{
		if(value.length < 1)
		{
			alert(alerttxt);
			return false
		}
		else
		{
			return true
		}
	}
}

function vali()
{
	nme=document.frm.nm.value;
	if(isNaN(nme)==false)
	{
		alert("Enter Proper Name");
		document.frm.nm.focus();
		document.frm.nm.value="";	
		return false;	
	}

		pas=document.frm.pass1.value;
	if(pas=="")
	{
		alert("Enter Proper Password");
		document.frm.pass1.focus();
		document.frm.pass1.value="";	
		return false;	
	}
	conpas=document.frm.cpass.value;
	if(conpas=="")
	{
		alert("Enter Proper  Confirm Password");
		document.frm.cpass.focus();
		document.frm.cpass.value="";	
		return false;	
	}

	conpas=document.frm.cpass.value;
	if(pas!=conpas)
	{

		alert("Password And Confirm Password Is Not Same");
		document.frm.cpass.focus();
		document.frm.cpass.value="";
		return false;

	}	
	if(isNaN(fnm)==false)
	{
		alert("Enter Proper First Name");
		document.frm.fname.focus();
		document.frm.fname.value="";	
		return false;	
	}

	lnm=document.frm.lname.value;
	if(isNaN(lnm)==false)
	{
		alert("Enter Proper Last Name");
		document.frm.lname.focus();
		document.frm.lname.value="";	
		return false;	
	}

	addr=document.frm.add.value;
	if(addr=="")
	{
		alert("Enter Proper Address");
		document.frm.add.focus();
		document.frm.add.value="";	
		return false;	
	}

	no=document.frm.phone.value;
	if(isNaN(no)==true || no=="")
	{
		alert("Enter Proper Phone Number");
		document.frm.phone.focus();
		document.frm.phone.value="";	
		return false;	
	}
	
	

		

	
	emid=document.frm.eid.value;
	if(emid=="")
	{
		alert("Enter Proper E-Mail ID");
		document.frm.eid.focus();
		document.frm.eid.value="";	
		return false;	
	}
	eidnm=document.frm.ead.value;
	if(eidnm=="")
	{
		alert("Enter Proper E-mail -- ID");
		document.frm.ead.focus();
		document.frm.ead.value="";	
		return false;
	}

	citynm=document.frm.city.value;
	if(isNaN(citynm)==false || citynm=="")
	{
		alert("Enter Proper City");
		document.frm.city.focus();
		document.frm.city.value="";	
		return false;	
	}

	pin=document.frm.pcode.value;
	if(isNaN(pin)==true || pin=="")
	{
		alert("Enter Proper Pincode");
		document.frm.pcode.focus();
		document.frm.pcode.value="";	
		return false;	
	}

	ctry=document.frm.contry.value;
	if(isNaN(ctry)==false || ctry=="")
	{
		alert("Enter Proper Contry");
		document.frm.state.focus();
		document.frm.state.value="";	
		return false;	
	}


}

function chknm()
{
		if(event.keyCode<48 || event.keyCode>57)
		{
			
		}
	    else
	    {

	      event.keyCode=0;

	    }


}


function chkno()
{
		if(event.keyCode<48 || event.keyCode>57)
		{
			
			event.keyCode=0;

		}


}
function chkcity()
{
	if(event.keyCode<48 || event.keyCode>57)
	{
			
	}
	else
	{
		event.keyCode=0;
	}
}
function chkcontry()
{
	if(event.keyCode<48 || event.keyCode>57)
	{
			
	}
	else
	{
		event.keyCode=0;
	}
}
</script>

<?php
include ("connection.php");

?>


<?php include "header.php" ?>
<div id="page">
		<div id="content">
				
				<div class="post">

				<p class="meta"></p>
<div class="entry"><p>


	<td width="60%" valign="top">
		<form method="POST" action="signup1.php" name="frm" ONSUBMIT="return vali()"><center>	
		<table cellspacing="18" style=" font-size:18px;color:brown; font-family:Verdana;">
			
			<th colspan=3 style="color:#556611;align:center;"><h1>Resitration Form</h1>
			<th colspan=2>
			<th colspan=2>
			<tr color="red">
			<td colspan=3 align=right style="color:#FF0000; font-size:15;">* Field is Required.
			<tr>
				<td align="left" >User Name<td>:</td>
				<td ><font color="red" size="2">*</font><input type="text" name="nm" size="32" value="" onKeyPress="return charonly(this, event)">
		
			<tr>
				<td align="left">Password<td>:</td>
				<td><font color="red" size="2">*</font><input type="password" name="pass1" value="" size="32">

			<tr>
				<td align="left">Confirm Password<td>:</td>
				<td><font color="red" size="2">*</font><input type="password" name="cpass" size="32">
		
			<tr>
				<td align="left">First Name<td>:</td>
				<td><font color="red" size="2">*</font><input type="text" name="fname" size="32" onKeyPress="return charonly(this, event)" >

			<tr>
				<td align="left">Last Name<td>:</td>
				<td><font color="red" size="2">*</font><input type="text" name="lname" size="32" onKeyPress="return charonly(this, event)">

			<tr>
				<td align="left">Address<td >:</td>
				<td><font color="red" size="2">*</font><textarea name="add" rows=3 cols=24></textarea>

			<tr>
				<td align="left">Phone No<td>:</td>
				<td><font color="red" size="2">*</font><input type="text" name="phone" size="32" maxlength="10"  onKeyPress="return numbersonly(this, event)">

			<tr>
				<td align="left">E-mail Id<td>:</td>
			<td><font color="red" size="2">*</font><input type="text" name="eid" size="20">
				@&nbsp;<input type="text" name="ead" size="3">
			

			<tr>
				<td align="left">City<td>:</td>
				<td><font color="red" size="2">*</font><input type="text" name="city" size="32" onKeyPress="return charonly(this, event)">

			<tr>
				<td align="left">PinCode<td>:</td>
				<td><font color="red" size="2">*</font><input type="text" name="pcode" size="32" maxlength="6"  onKeyPress="return numbersonly(this, event)">

			<tr>
				<td align="left">Country<td>:</td>
				<td><font color="red" size="2">*</font><input type="text" name="contry" size="32" onKeyPress="return charonly(this, event)">
												
				
			

			<tr align="center">
					<TR><td><TR><td><TR><td>
				<td colspan=2><input type="submit" value="&nbsp&nbsp sign up &nbsp&nbsp" name="sign" onClick="locat()" style=" font-size:16px;color:#FF3366; font-family:Verdana;background:url(images/back.gif);border:0;cursor:hand;">
					<input type="reset" value="&nbsp&nbsp Reset &nbsp&nbsp" name="rset" style="font-size:16px;color:#FF3366;font-family:Verdana;background:url(images/back.gif);border:0;cursor:hand;">
		</table></center>
		</form>

				

</table>
<!--<p>
  <h1 align="center"style="font-size:15px;color:#556611;font-family:monotype corsiv"><u>The Icecream Palour</u></h1><br>
<marquee behavior="scroll"><p>&nbsp;&nbsp;<img src="images/78.jpg" height="75" width="75"  />
&nbsp;&nbsp;<img src="images/fghj.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fghjk.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fhj.jpg" height="75"width="75"/>
&nbsp;&nbsp;<img src="images/5.jpg"height="75" width="75"/>
</marquee>
</p>-->
</div>
<br>
<br>
<br>
<?php 
include "footer.php" ?>
</div>





