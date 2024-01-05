<?php
include("connection.php");
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
<div class="entry"><p><br>
<?php
echo "<form name='f1' action='sdelete_q.php' method='GET' class='col'>";
echo "Enter Address".      "<input type='text' name='t1'>"."<br></br>"."<br></br>";
echo "<input type='submit' value='ok'>";

echo"</form>";
?>
<br />
<br /><?php include("footer.php"); ?> 
</body>
</html> 