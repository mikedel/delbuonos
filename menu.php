<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Del Buono's Bakery</title>
	<!-- <meta name="viewport" content="width=device-width; initial-scale=1.0"> -->
	<link rel="stylesheet" href="css/style.css">
	<!--[if IE]>
	  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="php">
	<div id="container">
		<div id="header">
			<div id="banner">
				<img id="logo" src="/images/logo.png" alt="logo">
				<img id="cart" src="/images/cart.jpg" alt="cart">
			</div>
			<div id="menu">
				<nav>
					<ul id="menuList">
						<li class="menuItem"><a href="index.html">Home</a></li>
						<li class="menuItem"><a href="menu.html">Menu</a></li>
						<li class="menuItem"><a href="about.html">About Us</a></li>
						<li class="menuItem"><a href="media.html">Media</a></li>
						<li class="menuItem"><a href="contact.html">Contact Us</a></li>
						<li class="menuItem"><a href="locations.html">Locations</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="dbMenu">
	    	<?php
	            $con=mysqli_connect("localhost","root","2eagles23","delBuonos");
	            if (mysqli_connect_errno())
	                echo "Failed to connect to MySQL: " . mysqli_connect_error();
				$query=mysqli_query($con, "SELECT COUNT(*) FROM menu");
				$temp = mysqli_fetch_array($query);
				$total = $temp[0];
				$break1 = $total - $total/3;
				$break2 = $total - 2*$total/3;
				$rownum = 0;
	            $result = mysqli_query($con,"SELECT * FROM menu");
				echo '<div class="dbListDiv">';
	            echo '<ul class="dbMenuList">';
	            while($row = mysqli_fetch_array($result)) 
	            {
	            	$rownum++;
	            	//if($rownum == $break1 || $rownum == $break2)
						//echo '</ul></div><div class="dbListDiv"><ul class="dbMenuList">';
	                echo '<li class="dbName">';
	                echo $row['name'];
	                echo "</li>";
					//store total rows variable and divide by 3
					//break1 = total - total/3
					//break2 = total - 2*total/3
					//make variable row number and increment every loop
					//if row number = break1 or break2
					//create new ul
					//make uls inline and float left - all width=33%
					echo '<li class="dbPrice">';
	                echo $row['price'];
	                echo "</li>";
	                echo "<br>";
	            }
	            echo '</ul></div>';
	            mysqli_close($con);
	        ?>
	    </div>
	</div>
	<div id="footer">
		<h3>© 2014 DEL BUONO'S BAKERY &nbsp&nbsp&nbsp 319 BLACK HORSE PIKE &nbsp&nbsp&nbsp HADDON HEIGHTS, NJ 08035	&nbsp&nbsp&nbsp 856-546-9585</h3></br>
	</div>
</div>
</body>
</html>
