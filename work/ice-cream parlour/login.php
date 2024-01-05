<?php
       include("connection.php");
?>

<script>

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
	nme=document.frm.u1.value;
	if(isNaN(nme)==false)
	{
		alert("Enter Proper User Name");
		document.frm.u1.focus();
		document.frm.u1.value="";	
		return false;	
	}
	
	pass=document.frm.pa1.value;
	if(pass=="")
	{
		alert("Enter Proper password");
		document.frm.pa1.focus();
		document.frm.pa1.value="";	
		return false;
	}
	
}
</script>
<?php
	include("header.php");
?>
<html>
<body>
<div id="page">
		<div id="content">
				
				<div class="post">

				<p class="meta"></p>
<div class="entry"><p>
<form action='login_q.php'name='frm'method='POST' ONSUBMIT="return chkval()">
<center>
<br><br><br>
<table border="1" width="30%" align="center">
<tr align="center">
<td align="center" style="font-size:24px; color:#FF6655; border-style:dashed">LOGIN FORM
</td></tr></table>
<br>
<tr>
<td align="center" id="head" colspan="2"><font color="brown"><b>Already 
Registered User Log_In</b></font></td>
 </tr><br>
 <br>
 <tr>
<td><font color="#FF6655"><b>&nbsp;&nbsp;Enter User Name</b></font></td>&nbsp;
<td><input type='text' name='u1' onKeyPress="return charonly(this, event)"></td>
<br><br>
<td><font color="#FF6655"><b>&nbsp;&nbsp;&nbsp;Enter Password</b></font></td>&nbsp;
<td><input type='password' name='pa1'></td>
<br><br><br>
<tr>
    <td align="center" id="head" colspan="2"><b><font color="brown">New User 
      Quickly Register for Free <br>Click On Sign Button</font></b></td>
  </tr><br><br><br>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' name='login' value='Sign In' class=a1 style="background:url(images/navigation_bg.png); width:85px; height:35px; color:#FFFF00;'cursor:hand;'"></td>&nbsp;&nbsp;&nbsp;&nbsp;
<td><input type='reset' name='reset' value='Reset' class=a1 style="background:url(images/navigation_bg.png); width:85px; height:35px; color:#FFFF00;'cursor:hand;'"></td>&nbsp;&nbsp;&nbsp;&nbsp;
<td><a href="signup.php"><input type='button' value='Sign Up' name='signup' class=a1 style="background:url(images/navigation_bg.png); width:85px; height:35px; color:#FFFF00;'cursor:hand;'"></a></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td><a href="logoff.php"><input type='button' value='logout' name='logoff' class=a1 style="background:url(images/navigation_bg.png); width:85px; height:35px; color:#FFFF00;'cursor:hand;'"></a></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</tr>
<br>
<br>

</center>
</form>

			

<!--<p>
<br><h1 align="center"style="font-size:15px;color:#556611;font-family:monotype corsiv"><u><br><br><br>Patel Icecream Parlour</u></h1>
<marquee behavior="alternate"><p>&nbsp;&nbsp;<img src="images/78.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fghj.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fghjk.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fhj.jpg" height="75"width="75"/>
&nbsp;&nbsp;<img src="images/5.jpg"height="75" width="75"/>
</marquee></p>
</p>-->
<br>
<br>
		
<?php include("footer.php");?> 
</body>
</html>     
