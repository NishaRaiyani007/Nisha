<?php
include("header.php");
?>
<style type="text/css">
.col
{
color:#FF3366;
font-family:verdana;
}
</style>
<div id="page">
		<div id="content">
				
				<div class="post">

				<p class="meta"></p>
<div class="entry"><p>
<?php
	include("connection.php");
	$sql="select *from img";
	echo "<table class='col'>";
	$res=mysql_query($sql)or die("Can't Select Data");
	$cnt=1;//mysql_num_rows($res);
	while($row=mysql_fetch_array($res))
	{
		echo "<td><img src='$row[2]' height='190' width='190' onMouseOver='this.height=300;this.width=300' onmouseOut='this.height=190;this.width=190'><br>";
		echo $row[1]."&nbsp;&nbsp;&nbsp;Rs.".$row[3]."</td>";	
		echo"<td><font color='brown' size=2><a href=flavors.php?price=".$row[3]."></a></font></td>";
		if($cnt%3==0)
		{
			echo "<tr>";
		}
		$cnt++;	
	}
	echo "</table>";
?>

<?php include "footer.php" ?>
