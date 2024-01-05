<?php
	include("header.php");

?>


<tr><td><img src="images/imgcon.png" height="32" width="25"><b><a href="index.php" style="color:#FF3366"><font size="6">Logout</font></a></b> </td></tr>
<div id="content">
	<div id="left">
	  <a href="flavors.php"></a>
	  <div class="header">
					<div class="footer">
						<div class="body">
							<h1><font color="#FF6699"><i><u>Choose Your Flavors</u></i></h1>
							<div class="section">
			

 <?php
include("connection.php");
?>
	
<div id="page">
		<div id="content">
				<div class="post">
				<p class="meta"></p>
<div class="entry"><p>
 <?php
	
	mysql_select_db("ice_cream")or die("Can't Select Database");
	$sql="select *from img";
	echo "<table>";
	$res=mysql_query($sql)or die("Can't Select Data");
	$cnt=1;//mysql_num_rows($res);
	while($row=mysql_fetch_array($res))
	{
	    	
		echo "<td><img src='$row[2]' height='140' width='140' onMouseOver='this.height=300;this.width=300' onmouseOut='this.height=140;this.width=140'></br>";
	echo $row[1]."&nbsp;&nbsp;&nbsp;&nbsp;Rs.".$row[3]."</td>";	
        echo "<td  style='font-size:15px;font-family:monotype corsiv;color:#FF6699;font-weight:bold'><a href=order.php?&name=".$row[1]."&path=".$row[2]."&price=".$row[3].">BUY NOW</a></font></td>";
	if($cnt%3==0)
	{
		echo "<tr>";
	}
	$cnt++;	
}
echo "</table>";
?>
		
								
 	<div class="section">
	
</div>
			

<!--<h1 align="center"style="font-size:15px;color:#556611;font-family:monotype corsiv"><u>Patel Icecream Parlour</u></h1>
<marquee behavior="alternate"><p>&nbsp;&nbsp;<img src="images/78.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fghj.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fghjk.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fhj.jpg" height="75"width="75"/>
&nbsp;&nbsp;<img src="images/5.jpg"height="75" width="75"/>
</marquee>-->
<div id="footer" align="center" >
<font style="font-size:18px;color:brown;font-family:'Times New Roman', Times, serif;font-weight:bold">Website Developed By nisha,payal &chiragi&nbsp;<br>
<br></font></marquee></div>



	