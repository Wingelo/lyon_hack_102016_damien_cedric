<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
			  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
			  crossorigin="anonymous">
		<link rel="stylesheet" href="css/style_logging.css">
	</head>
	<!-- logging admin -->
	<body>
		<!--
		you can substitue the span of reauth email for a input with the email and
		include the remember me checkbox
		-->
		<div class="container">
			<div class="card card-container">
				<!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
				<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
				<p id="profile-name" class="profile-name-card"></p>
				<form class="form-signin">
					<span id="reauth-email" class="reauth-email"></span>
					<input type="text" id="inputEmail" class="form-control" placeholder="Prénom" required autofocus>
					<input type="text" id="inputPassword" class="form-control" placeholder="Nom" required>
					<div id="remember" class="checkbox">
						<label>
							<input type="checkbox" value="remember-me"> Remember me
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
				</form><!-- /form -->
				<a href="#" class="forgot-password">
					Forgot the password?
				</a>
			</div><!-- /card-container -->
		</div><!-- /container -->
	</body>
	<!-- End logging admin -->
	<script src=""></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
			integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
			crossorigin="anonymous"></script>
</html>