<?php
include("connection.php");
header("location:flaview.php");
include("header.php");
?>

<div id="page">
		<div id="content">
				
				<div class="post">

				<p class="meta"></p>
<div class="entry"><p>
<?php
$a=$_GET['t1'];
$s="delete from img where id='$_GET[t1]'";
mysql_query($s)or die("can't delete");
?>
</p></div>
</div></div></div>
			

<h1 align="center"style="font-size:15px;color:#556611;font-family:monotype corsiv"><u>Patel Icecream Parlour</u></h1>
<marquee behavior="alternate"><p>&nbsp;&nbsp;<img src="images/78.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fghj.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fghjk.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fhj.jpg" height="75"width="75"/>
&nbsp;&nbsp;<img src="images/5.jpg"height="75" width="75"/>
</marquee></p>
<?php
 include ("footer.php");
  ?>
