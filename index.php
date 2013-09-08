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

			<form class="form-signin">
				<h2 class="form-signin-heading">Please sign in</h2>
				<input type="text" class="form-control" placeholder="Email address" autofocus>
				<input type="password" class="form-control" placeholder="Password">
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>

			<button class="btn btn-success" id="btnLogin" onclick="loadDiv()">Sign Up / Log In</button>
			<div id="divLogin"></div>

		</div> <!-- /container -->

	</body>
</html>