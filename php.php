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
	<div id="main" role="main" class="hellobox">
		<h1><?php echo 'Hello World!'; ?>
		</h1>
		<h2>From PHP <?php echo PHP_VERSION; ?>
		</h2>
	</div>
	<div id="dbMenu">
    	<?php
            $con=mysqli_connect("localhost","root","2eagles23","delBuonos");
            if (mysqli_connect_errno())
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            $result = mysqli_query($con,"SELECT * FROM menu");
            echo '<ul id="dbMenuList">';
            while($row = mysqli_fetch_array($result)) 
            {
                echo '<li id="dbMenuListItem">';
                echo $row['name'] . " " . $row['price'];
                echo "</li>";
                echo "<br>";
            }
            echo '</ul>';
            mysqli_close($con);
        ?>
    </div>
	<footer>
	<h4>This is an example page running PHP on your Koding Server.</h4>
	<p>
		You can create your own simple PHP "Hello World" with this:
	</p>
	<pre>&lt;?php echo 'Hello World from PHP'; ?&gt;</pre>
	</footer>
</div>
</body>
</html>
