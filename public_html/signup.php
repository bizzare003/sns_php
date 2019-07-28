<?php
	require_once(__DIR__.'/../config/config.php');
	$app = new MyApp\Controller\Signup();
	$app->run();
	$emailValue = isset($app->getValues()->email) ? h($app->getValues()->email) : '';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet" href="<?php echo SITE_URL;?>/css/style.css">
</head>
<body>
	<div id="container">
		<form action="" method="post" id="signup">
			<div class="inputBlock">
				<input type="text" name="email" value="<?php echo $emailValue;?>" placeholder="email">
				<?php if($app->getErrors('email')):?>
				<p class="error"><?php echo h($app->getErrors('email'));?></p>
				<?php endif;?>
			</div>
			<div class="inputBlock">
				<input type="password" name="password" placeholder="password">
				<?php if($app->getErrors('password')):?>
				<p class="error"><?php echo h($app->getErrors('password'));?></p>
				<?php endif;?>
			</div>
			<div class="btn" onclick="document.getElementById('signup').submit();">Sign Up</div>

			<p class="signUp"><a href="/login.php">Login</a></p>

			<input type="hidden" name="token" value="<?php echo h($_SESSION['token']);?>">
		</form>
	</div>
</body>
</html>
