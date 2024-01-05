<?php
include("connection.php");
header("location:billview.php");
include("header.php");
?>
<div id="page">
		<div id="content">
				
				<div class="post">

				<p class="meta"></p>
<div class="entry"><p>
<?php
$a=$_GET['t1'];
$s="delete from bill where address='$_GET[t1]'";

mysql_query($s)or die("can't delete");
?>
<br />
<br />
<?php 
include("footer.php"); ?> 
</body>
</html> 