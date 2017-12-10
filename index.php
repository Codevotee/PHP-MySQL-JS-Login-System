<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP-MySQL-JS Login System</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="follow">
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css" />
</head>
<body>
	<div class="uk-section uk-container uk-text-center">
		<div class="uk-grid uk-child-width-1-3@s" uk-grid>
			<!-- width of 100% when big and width of one third when smaller -->
			<form class="uk-form-stacked js-login">

				<div class="uk-margin">
					<label class="uk-form-label" for="form-stacked-text">Email</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="form-stacked-text" type="email" placeholder="Enter your email address" required>
					</div>
				</div>

				<div class="uk-margin">
					<label class="uk-form-label" for="form-stacked-text">Password</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="form-stacked-text" type="password" placeholder="Enter your password" required>	
					</div>
				</div>

				<div class="uk-margin">
					<button class="uk-button uk-button-default" type="submit">Login</button>
				</div>
			</form>
		</div>
	</div>

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- UIkit JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/js/uikit-icons.min.js"></script>
</body>
</html>