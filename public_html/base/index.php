<?php
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
	<div id="container">
		<form action="logout.php" method="post" id="logout">
			<div class="userEmail"></div>
			<div class="logoutBtn">
				<input type="submit" value="Log Out">
			</div>
			<input type="hidden" name="token" value="">
		</form>

		<h1>Users <span>()</span></h1>
		<ul class="userList">
			<li></li>
		</ul>
	</div>
</body>
</html>
