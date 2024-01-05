<?php
	include("header.php");
?>
<div id="content">
	<div id="left">
	  <a href="feedback1.php"></a>
	  <script language="JavaScript">
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

function validate_email(field,alerttxt)
{
	with (field)
	{
		apos=value.indexOf("@")
		dotpos=value.lastIndexOf(".")

		if (apos<1||dotpos-apos<2) 
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
function validate_form(thisform)
{
	with(thisform)
	{
		if (not_empty(First, " first Name field is empty!")==false)
		{
			First.focus();
			return false;
		}
			if (not_empty(Last, " last Name field is empty!")==false)
		{
			Last.focus();
			return false;
		}
		if (not_empty(Address, "address field is empty!")==false)
		{
			Address.focus();
			return false;
		}
		if (not_empty(Phon, "phon no field is empty!")==false)
		{
			Phon.focus();
			return false;
		}		
		
		

				
		if (not_empty(Email, "Email field is empty!")==false)
		{
			Email.focus();
			return false;
		}
		
		if (validate_email(Email,"Not a valid e-mail address!")==false)
		{
		  	Email.focus();
			return false;
		}
		
		
		if (not_empty(Sug, "Quality field is empty!")==false)
		{
			Sug.focus();
			return false;
		}
	}				
}

</script>
	<form name="feedback" action="feedback12.php" method="get"  onSubmit="return validate_form(this)">
		<center><br/>
		<br/>
	  <font style="font-size:37px;color:#556611;font-family:monotype corsiv" ><blink><b>Feedback Form</b></blink></font>
	    </center><br />
	<center>
	    <table height="590" width="455" border="2" bordercolor="#FF3366">
  
                     <tr> 
						<td width="113" height="63"><font color="brown" size="2"> <b>First Name<td>:</td></b> </td>
					   <td width="324" > <input name="First" type="text" onkeypress="return charonly(this, event)" value="" size="50" /> </td>
		  </tr>
					  <tr> 
						<td height="62"><font color="brown" size="2"><b>Last Name<td>:</td></b> </td>
						<td><input type="text" size="50" name="Last" onKeyPress="return charonly(this, event)"/></td>
					  </tr>
					  <tr> 
						<td height="122"><font color="brown" size="2"><b>Address<td>:</td></b></td>
						<td><textarea rows="7" cols="42" name ="Address" ></textarea></td>
					  </tr>
					  <tr> 
						<td height="66"><font color="brown" size="2"><b>Phone No<td>:</td></b></td>
						<td>   <input type="text" size="50" name="Phon" maxlength="10" onkeypress="return numbersonly(this, event)"/></td>
					  </tr>
					  
					  <tr> 
						<td height="67"><font color="brown" size="2"><b>E-mail<td>:</td></b></td>
						<td><input type="text" size="50" name="Email" ></td>
					  </tr>
					  <tr> 
						<td height="85"><font color="brown" size="2"><b>Suggestion<td>:</td></b></td>
						<td><textarea rows="7" cols="42" name="Sug"></textarea></td>
		  </tr>
						<tr> 
						 <td height="69"><center><font color="#556611" size="7"><input type="reset"  name="reset"value="Reset All" size="50" style="background:url(images/navigation_bg.png); width:85px; height:35px; color:#66FF99;cursor:hand;" /></center></td>
						<td colspan=3 align="center"><input type="Submit" name="s1" value="Submit" size="50" style="background:url(images/navigation_bg.png); width:85px; height:35px; color:#66FF99;cursor:hand;"/></td>
					  </tr>
      </table>
 	  </center>
	  </form></div>
 
<br />
<br />
<div id="footer" align="center" >
<font style="font-size:18px;color:brown;font-family:'Times New Roman', Times, serif;font-weight:bold">Website Developed By nisha,payal &chiragi<br>
<br></font></marquee></div>



