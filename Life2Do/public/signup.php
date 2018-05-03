<?php 
	require_once('../private/init.php');
	function test($array){
		echo "<pre>";
			print_r($array);
		echo "</pre>";
	}
	if(isset($_POST['submit'])){
		test($_POST);
	}

	$title = "Signup";
	include( SHARED_PATH . '/header.php');
?>
<div class="container">
	<i class="material-icons mt-100 center-align text-lighten-2 red-text large" style= "display: block;">account_circle</i>	
	<h3 class="center-align text-lighten-2 red-text">Signup</h3>
	<div class="row mt-100" >
		<form class="col s12 push-s3" action="<?= $_SERVER['PHP_SELF'];?>" method="post">
			
			<div class="row">
				<div class="input-field col s3">
					<input id="first_name" name="firstName" type="text" class="validate">
					<label for="first_name">First Name</label>
				</div>
				<div class="input-field col s3">
					<input id="last_name" name="lastName" type="text" class="validate">
					<label for="last_name">Last Name</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6 center-align">
					<input id="email" name="email" type="email" class="validate">
					<label for="email">Email</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<input id="username" name="username" type="text" class="validate">
					<label for="username">Username</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input id="password" name="pass" type="password" class="validate">
					<label for="password">Password</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input id="password2" name="pass2" type="password" class="validate">
					<label for="password2">Confirm Password</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<div class="row">
						<div class="input-field col s12">
								<button name="submit" type="submit" class="waves-effect waves-light btn btn-large col s12 red lighten-1">Submit</button>
						</div>
					</div>
				</div>
			</div>

		</div><!--End of row-->
		</form> <!--End of form-->
	</div> <!--End of form container-->
</div>
<?php include( SHARED_PATH . '/footer.php'); ?>