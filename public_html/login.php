<?php
	require_once(__DIR__.'/../config/config.php');
	$app = new MyApp\Controller\Login();
	$app->run();
	$emailValue = isset($app->getValues()->email) ? h($app->getValues()->email) : '';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Log In</title>
	<link rel="stylesheet" href="<?php echo SITE_URL;?>/css/style.css">
</head>
<body>
	<div id="container">
		<form action="" method="post" id="login">
			<div class="inputBlock">
				<input type="text" name="email" value="<?php echo $emailValue;?>" placeholder="email">
			</div>
			<div class="inputBlock">
				<input type="password" name="password" placeholder="password">
			</div>
			<?php if($app->getErrors('login')):?>
				<p class="error"><?php echo h($app->getErrors('login'));?></p>
			<?php endif;?>
			<div class="btn" onclick="document.getElementById('login').submit();">Log In</div>

			<p class="signUp"><a href="/signup.php">Sign Up</a></p>
			<input type="hidden" name="token" value="<?php echo h($_SESSION['token']);?>">
		</form>
	</div>
</body>
</html>
