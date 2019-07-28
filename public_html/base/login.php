<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Log In</title>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<div id="container">
		<form action="" method="post" id="login">
			<div class="inputBlock">
				<input type="text" name="email" value="" placeholder="email">
			</div>
			<div class="inputBlock">
				<input type="password" name="password" placeholder="password">
			</div>

				<p class="error"></p>
			<div class="btn">Log In</div>

			<p class="signUp"><a href="/signup.php">Sign Up</a></p>
			<input type="hidden" name="token" value="">
		</form>
	</div>
</body>
</html>
