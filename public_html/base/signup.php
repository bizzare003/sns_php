<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<div id="container">
		<form action="" method="post" id="signup">
			<div class="inputBlock">
				<input type="text" name="email" value="" placeholder="email">
				<p class="error"></p>
			</div>
			<div class="inputBlock">
				<input type="password" name="password" placeholder="password">
				<p class="error"></p>
			</div>
			<div class="btn">Sign Up</div>

			<p class="signUp"><a href="/login.php">Login</a></p>

			<input type="hidden" name="token" value="">
		</form>
	</div>
</body>
</html>
