<?php
	require_once(__DIR__.'/../config/config.php');
	$app = new MyApp\Controller\Index();
	$app->run();
	// var_dump($_SESSION['me']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo SITE_URL;?>/css/style.css">
</head>
<body>
	<div id="container">
		<form action="logout.php" method="post" id="logout">
			<div class="userEmail"><?php echo h($app->me()->email);?></div>
			<div class="logoutBtn">
				<input type="submit" value="Log Out">
			</div>
			<input type="hidden" name="token" value="<?php echo h($_SESSION['token']);?>">
		</form>

		<h1>Users <span>(<?php echo count($app->getValues()->users);?>)</span></h1>
		<ul class="userList">
			<?php foreach ($app->getValues()->users as $user) : ?>
				<li><?= h($user->email); ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
</body>
</html>
