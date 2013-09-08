<!DOCTYPE html>
<html>
	<head>
		<title>Fridge Inventory</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<!--		<link href="css/custom.css" rel="stylesheet" media="screen">-->

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<button class="btn btn-primary" id="btnHome" onclick="loadDiv('home')"><span class="glyphicon glyphicon-home"></span> Home</button>
			<button class="btn btn-success" id="btnLogin" onclick="loadDiv('login')">Sign Up / Log In</button>
			<div id="divDisplay"></div>

		</div> <!-- /container -->

	</body>
</html>