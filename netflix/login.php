<?php

	function canLogin($email, $password) {
		if( $email === "net@flix.com" && $password === "12345" ) {
			return true;
		}
		else {
			return false;
		}
	}

	// detecteer submit
	if( !empty($_POST) ){
		// velden uitlezen in variabelen
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		// validatie: velden mogen niet leeg zijn
		if( !empty($email) && !empty($password) ){
			// indien ok: login checken
			if( canLogin($email, $password) ) {
				session_start();
				$_SESSION['user'] = $email;

				// redirect naar index.php
				header("Location: index.php");
			} else {
				$error = "Sorry, we couldn't log you in.";
			}
		} else {
			// indien leeg: error generen
			$error = "Email and password are required.";
		}
	}


?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IMDFlix</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="netflixLogin">
		<div class="form form--login">
			<form action="" method="post">
				<h2 form__title>Sign In</h2>

				<?php if(isset($error)): ?>
				<div class="form__error">
					<p><?php echo $error; ?></p>
				</div>
				<?php endif; ?>

				<div class="form__field">
					<label for="email">Email</label>
					<input id="email" name="email" type="text">
				</div>
				<div class="form__field">
					<label for="password">Password</label>
					<input id="password" name="password" type="password">
				</div>

				<div class="form__field">
					<input type="submit" value="Sign in" class="btn btn--primary">	
					<input type="checkbox" id="rememberMe"><label for="rememberMe" class="label__inline">Remember me</label>
				</div>
			</form>
		</div>
	</div>
</body>
</html>