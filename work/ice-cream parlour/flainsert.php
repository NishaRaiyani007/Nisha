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
<div class="entry"><p>
<?php
echo "<form name='f1' action='flainsert_q.php' method='GET' class='col'>";
echo "Enter id". "&nbsp;&nbsp;<input type='text' name='t1'>"."<br></br>";
echo "Enter name".      "&nbsp;&nbsp;<input type='text' name='t2'>"."<br></br>";
echo "Enter path".      "&nbsp;&nbsp;<input type='text' name='t3'>"."<br></br>";
echo "Enter price".      "&nbsp;<input type='text' name='t4'>"."<br></br>";
echo "<input type='submit' value='ok'></a>";
echo"</form>";
?>
<br />
<br />

<?php
include("footer.php");
 ?> 
</body>
</html>             
