<!DOCTYPE html>
  <html>
    <head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			<title>My List | <?= $title; ?></title>
			<link rel="stylesheet" href="style/css/main.css">
    </head>
    <body>
		<!-- Dropdown Structure -->
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="#!">Edit</a></li>
			<li class="divider"></li>
			<li><a href="#!">Delete</a></li>
		</ul>

		<nav>
			<div class="container">
				<div class="nav-wrapper">
					<a href="index.php" class="brand-logo">Life2Do</a>
					<ul class="right hide-on-med-and-down">
						<li><a href="index.php">Home</a></li>
						<li><a href="editAccount.php">Wish</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="signup.php">Create Account</a></li>
						<li><a href="logout.php">Logout</a></li>
						<!-- Dropdown Trigger -->
						<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
					</div>
				</ul>
			</div>
		</nav> <!--End of navigation-->