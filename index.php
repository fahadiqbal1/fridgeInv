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
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Fridge Inventory</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#" onclick="loadDiv('home')"><span class="glyphicon glyphicon-home"></span> Home</a></li>
<!--					<li><a href="#">Link</a></li>-->
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" onclick="loadDiv('login')">Sign Up / Log In</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		<div class="container">
			<div id="divDisplay"></div>

		</div> <!-- /container -->

	</body>
</html>