<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PATEL ICE-CREAME</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
</style>
<br>
</head>
<h1 align="center"style="font-size:55px;color:#FF6699;font-family:monotype corsiv">Welcome to Patel Icecream Parlour</h1>
<body>
	<div id="page">
		<div id="sidebar"> <a href="index.php"><img id="logo" src="images/logo.jpg" width="180" height="275"alt="" title="Patel Ice-cream parlour"></a>
			<h2>FLAVOR OF THE DAY</h2>
			<ul>
				<li>
					<a href="flavors.php"><img src="images/strawberry-delight.gif" width="165" height="165" alt=""></a>
					<h3><a href="flavors.php">Strawberry Delight</a></h3>
				</li>
			</ul>
			<h2>POPULAR FLAVORS</h2>
			<ul>
				<li>
					<a href="flavors.php"><img src="images/tropical-mango.gif" width="165" height="165" alt=""></a>
					<h3><a href="flavors.php">Tropical Mango</a></h3>
				</li>
				<li>
					<a href="flavors.php"><img src="images/rich-chocolate.gif" width="165" height="165" alt=""></a>
					<h3><a href="flavors.php">Rich Chocolate</a></h3>
				</li>
				<li>
					<a href="flavors.php"><img src="images/sour-rasberry.gif" width="165" height="165" alt=""></a>
					<h3><a href="flavors.php">Sour Rasberry</a></h3>
			  </li>
			</ul>
		</div>
		<div id="content"> 
			<!-- start of header --><marquee behavior="scroll">&nbsp;&nbsp;<img src="images/sd.jpg" height="70" width="70" />
&nbsp;&nbsp;<img src="images/p.jpg" height="70" width="70" />
&nbsp;&nbsp;<img src="images/d.jpg" height="70" width="70" />
&nbsp;&nbsp;<img src="images/sg.jpg" height="70"width="70"/>
&nbsp;&nbsp;<img src="images/wdg.jpg"height="70" width="70"/>
</marquee>

			<div id="header">
				<ul class="navigation">
					<li><a href="index.php">Home</a></li>
					<li><a href="signup.php">Sign up</a></li>
					<li><a href="flavors.php">Flavors</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="feedback1.php">Feedback</a></li>
					<li><?php if(isset($_SESSION['username'])) echo '<a href="login.php">Login</a>'; else  echo '<a href="logoff.php">LogOut</a>';?></li>
			  </ul>
			</div>
			<!-- end of header --> 
			<!-- start of class content -->
			<div class="content"> 
				<!-- start of slider-->

				<div class="slider">
					<ul>
						<li><marquee behavior="alternate">
						      	<a href="flavors.php"><img src="images/mnk.jpg" width="680" height="300" alt="Frosty Sweet"></a>
							
							<a href="flavors.php"><img src="images/v7.jpg" width="680" height="300" alt="Frosty Sweet"></a>
							<a href="flavors.php"><img src="images/Stra3.jpg" width="680" height="300" alt="Frosty Sweet" ></a>
							<a href="flavors.php"><img src="images/l.jpg" width="680" height="300" alt="Frosty Sweet" ></a>
								<a href="flavors.php"><img src="images/111.jpg" width="680" height="300" alt="Frosty Sweet" ></a>
							<a href="flavors.php"><img src="images/i1i1.jpg" width="680" height="300" alt="Frosty Sweet"></a>
		                    <a href="flavors.php"><img src="images/knm.jpg" width="680" height="300" alt="Frosty Sweet"></a>
						
						    <a href="flavors.php"><img src="images/b.jpg" width="680" height="300" alt="Frosty Sweet"></a>
                           

                            
                          </marquee>


						</li>
					</ul>
					<div class="footer">
						<ul>
							<li>
								<a href="flavors.php"><img src="images/button-slider1.gif" width="24" height="24" alt="Frosty Sweet" title="Frosty Sweet"></a>							</li>
							<li>
								<a href="flavors.php"><img src="images/button-slider2.gif" width="24" height="24" alt="Frosty Sweet" title="Frosty Sweet"></a>							</li>
							<li>
								<a href="flavors.php"><img src="images/button-slider3.gif" width="24" height="24" alt="Frosty Sweet" title="Frosty Sweet"></a>							</li>
						</ul>
					</div>
				</div>
				<!-- end of slider --> 
				<!-- start of featured-->
				<div class="featured">
					<ul>
						<li>
						  <a href="flavors.php"><img src="images/e.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
						  <h2><a href="flavors.php"></a></h2>
						</li>
						<li>
							<a href="flavors.php"><img src="images/23.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.php"></a></h2>
						</li>
						<br>
						<li>
							<a href="flavors.php"><img src="images/r.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.php"></a></h2>
						</li>
						
						<li>
							<a href="flavors.php"><img src="images/h.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.php"></a></h2>
						</li>
						<br>
						<li>
							<a href="flavors.php"><img src="images/str7.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.php"></a></h2>
						</li>
						
						<li>
							<a href="flavors.php"><img src="images/v1.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.php"></a></h2>
						</li>
						
					</ul>
			  </div>
				<div class="section">
				  <div class="about">
					<br>
				<div class="section"><br>
					<h2><u>Sweet words from our clients</u></h2>
					<div class="comment">
						<p>
						<font face="Times New Roman, Times, serif">	The icecream is commited to building a unified family, consistently serving the highest quality diffrent icecream providing outstanding personalised service in a vibrant store atmosphere.			</p>
						</font></div>
				
		
 

<!--<p>
  <h1 align="center"style="font-size:15px;color:#556611;font-family:monotype corsiv"><u>Patel Icecream Palour</u></h1><br>
<marquee behavior="scroll"><p>&nbsp;&nbsp;<img src="images/78.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fghj.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fghjk.jpg" height="75" width="75" />
&nbsp;&nbsp;<img src="images/fhj.jpg" height="75"width="75"/>
&nbsp;&nbsp;<img src="images/5.jpg"height="75" width="75"/>
</marquee>
</p></p>-->

<div id="footer" align="center" >
<font style="font-size:18px;color:brown;font-family:'Times New Roman', Times, serif;font-weight:bold">Website Developed By nisha,payal &amp;chiragi<br>
</font>
</marquee></div>
<!-- footer ends--</div>
</body>
</html>
