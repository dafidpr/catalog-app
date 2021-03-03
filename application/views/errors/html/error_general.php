<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https' : 'http');
$base_url .= '://' . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Database Error</title>

<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="<?=$base_url;?>assets/css/app-light.css">
<link rel="stylesheet" href="<?=$base_url;?>assets/css/feather.css">
<style type="text/css">

::-webkit-scrollbar {
	width: 5px!important;
}

::-webkit-scrollbar-thumb {
	background: rgba(220, 220, 220, 1);
}
</style>
</head>
<body>
	<div class="img col-md-6 mx-auto">
		<img src="<?=$base_url;?>assets/img/err_general.svg" width="100%" alt="">
		<br><br><br>
		<div id="container">
			<h1 class="text-center"><?php echo $heading; ?></h1>
			<?php echo $message; ?>
		</div>
	</div>
</body>
</html>