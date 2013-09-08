<div class="row">
	<div class="col-md-12">
		<div class="alert alert-success" id="alertLogin" style="display:none;">...</div>
		<div class="col-md-6">
			<div class="well well-sm">
				<form class="form-horizontal" id="formSignIn" action="action/formSignIn.php" method="post">
					<div class="heading">
						<h4 class="form-heading">Sign In</h4>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputUsername">Username</label>
						<div class="controls">
							<input type="text" name="inputUsername" class="form-control" id="inputUsername" placeholder="E.g. ashwinhegde" required>
						</div>
					</div>
					<div class="control-group has-error">
						<label class="control-label" for="inputPassword">Password</label>
						<div class="controls">
							<input type="password" name="inputPassword" class="form-control" id="inputPassword" placeholder="Min. 8 Characters" required>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<label class="checkbox">
								<input type="checkbox"> Keep me signed in
								<a href="#" class="btn btn-link">Forgot my password</a>
							</label>
							<button type="submit" class="btn btn-success" id="btnSignIn">Sign In</button>
							<button type="button" class="btn btn-default">Help</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-6">
			<div class="well well-sm">
				<form class="form-horizontal" id="formSignUp" action="">
					<div class="heading">
						<h4 class="form-heading">Sign Up</h4>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputFirst">First Name</label>
						<div class="controls">
							<input type="text" class="form-control" id="inputFirst" placeholder="E.g. Ashwin">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputLast">Last Name</label>
						<div class="controls">
							<input type="text" class="form-control" id="inputLast" placeholder="E.g. Hegde">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputEmail">Email</label>
						<div class="controls">
							<input type="text" class="form-control" id="inputEmail" placeholder="E.g. ashwinh@cybage.com">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputUser">Username</label>
						<div class="controls">
							<input type="text" class="form-control" id="inputUser" placeholder="E.g. ashwinhegde">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Password</label>
						<div class="controls">
							<input type="password" class="form-control" id="inputPassword" placeholder="Min. 8 Characters">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<label class="checkbox">
								<input type="checkbox"> I agree all your <a href="#">Terms of Services</a>
							</label>
							<button type="submit" class="btn btn-success">Sign Up</button>
							<button type="button" class="btn btn-default">Help</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	var errorInd = false;
	var inputUsername = $("#inputUsername");
	var inputPassword = $("#inputPassword");

	$('#formSignIn').submit(function(){
		if(inputPassword.length < 8){
			showLoginAlert('Password must be at least 8 characters');
			errorInd = true;
		}
		if(errorInd==false){
			formVal(this.id);
		}
		return false;
	});
</script>