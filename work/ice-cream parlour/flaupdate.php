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
echo "<form name='f1' action='flaupdate_q.php' class='col'>";
echo "Enter old data which you want to update";
echo "&nbsp;&nbsp;";
echo "<input type='text' name='t1'><br>";
echo "<br></br>";
echo "Enter field name of that data";
echo "&nbsp;&nbsp;";
echo "<input type='text' name='t2'><br>";
echo "<br></br>";
echo "Enter new data";
echo "&nbsp;&nbsp;";
echo "<input type='text' name='t3'><br>";
echo "<br></br>";
echo "<input type='submit' value='ok'>";
echo"</form>";
?>

<?php include "footer.php" ?>
