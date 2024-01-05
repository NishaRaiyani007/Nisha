<?php
include("header.php");
?>
<div id="page">
		<div id="content">
				
				<div class="post">

				<p class="meta"></p>
<div class="entry"><p><br>
<?php
	include("connection.php");


	$res=mysql_query("select *from bill");
	echo "<h1  align='center'style='font-size:25px;color:#556611;font-family:monotype corsiv'><u>Bill-View</u></h1><br>";
	echo "<table width='70%' height='150' align='center'border=3 bordercolor='#FF3366' border=2 align='center'>";
	echo "<th style='font-size:16px; color:brown;font-family:monotype corsiv'> Bill_No</th>";
	echo "<th style='font-size:16px; color:brown;font-family:monotype corsiv'> Creaditcard_No</th>";
	echo "<th style='font-size:16px; color:brown;font-family:monotype corsiv'> Description </th>";
	echo "<th style='font-size:16px; color:brown;font-family:monotype corsiv'> Contact_No</th>";
	echo "<th style='font-size:16px; color:brown;font-family:monotype corsiv'> Address</th>";
	echo "<th style='font-size:16px; color:brown;font-family:monotype corsiv'> City</th>";
	echo "<th style='font-size:16px; color:brown;font-family:monotype corsiv'> Total_Amount</th>";

	while($row=mysql_fetch_array($res))
	{
		echo "<tr><td align='center' style='font-size:15px; color:#265656;font-family:monotype corsiv' >".$row[0]."</td>";
		echo "<td align='center' style='font-size:15px; color:#265656;font-family:monotype corsiv'>".$row[1]."</td>";
		echo "<td align='center' style='font-size:15px; color:#265656;font-family:monotype corsiv'>".$row[2]."</td>";
		echo "<td align='center' style='font-size:15px; color:#265656;font-family:monotype corsiv'>".$row[3]."</td>";
		echo "<td align='center' style='font-size:15px; color:#265656;font-family:monotype corsiv'>".$row[4]."</td>";
		echo "<td align='center' style='font-size:15px; color:#265656;font-family:monotype corsiv'>".$row[5]."</td>";
		echo "<td align='center' style='font-size:15px; color:#265656;font-family:monotype corsiv'>".$row[6]."</td>";
	}
echo "</table>";
?>
<br />
<br />
<?php
include("footer.php"); ?> 
</body>
</html> 