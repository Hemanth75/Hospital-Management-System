<!DOCTYPE html>
<html>
	<title>Admin Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="uikit/css/uikit.min.css" />
        <script src="uikit/js/uikit.min.js"></script>
        <script src="uikit/js/uikit-icons.min.js"></script>
<head>
	<title></title>
</head>
<body style="background-image: url('images/hosp.jpg');background-repeat: no-repeat;background-size: cover;width: 1700px;height: 800px">
	<a href="index.php"><p  style="font-size: 25px; color: yellow;text-align: center;">HOME</p></a>

	<div class="ab"></div>
	<div class="uk-position-center">
			<div class="uk-card uk-card-default uk-card-body">
				<form method="post" action="adminlogin.php">
					<div class="uk-margin">
						<select name="type">
							<option value="Admin">ADMIN</option>
						</select>
					</div>
					<div class="uk-margin">
						<input type="text" name="admname" class="uk-input" placeholder="username" required>
					</div>
					<div class="uk-margin">
					   <input type="password" name="adpass" class="uk-input" placeholder="password" required>
					</div>
					<div class="uk-margin">
						<input type="submit"  name="logsub" value="SUBMIT" >
					</div>
					
				</form>
			</div>
	</div>
</body>
</html>