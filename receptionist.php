<!DOCTYPE html>
<html>
	<title>Billing Login</title>
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
				<div class="uk-margin">
					<img src="images/home.jpg" style="height: 250px;width: 250px;">
				</div>
				<form method="post" action="receptionistlogin.php">
						<select name="type">
							<option value="Billing">BILLING</option>
						</select>
					<div class="uk-margin">
						<input type="text" name="recpname" class="uk-input" placeholder="username" required>
					</div>
					<div class="uk-margin">
					   <input type="password" name="recppass" class="uk-input" placeholder="password" required>
					</div>
					<div class="uk-margin">
						<input type="submit"  name="logsub" value="SUBMIT" >
					</div>
					
				</form>
			</div>
	</div>
</body>
</html>