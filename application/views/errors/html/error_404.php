
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https' : 'http');
$base_url .= '://' . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>

<link rel="icon" href="favicon.ico">
<link rel="stylesheet" href="<?=$base_url;?>assets/css/app-light.css">
<link rel="stylesheet" href="<?=$base_url;?>assets/css/feather.css">
<style type="text/css">
/* 
::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
} */

body {
	padding: 0;
	margin: 0;
}

.img {
	width: 40%;
	position: absolute;
	top: 45%;
	left: 50%;
	transform: translate(-50%, -50%);
}
</style>
</head>
<body>
	<div class="img text-center">
		<img src="<?=$base_url;?>assets/img/err_404.svg" width="100%" alt="">
		<br><br><br>
		<div id="container">
			<h1><?php echo $heading; ?></h1>
			<?php echo $message; ?>
			<a href="<?=$base_url;?>Dashboard" class="btn border-primary shadow">Back To Dashboard</a>
		</div>
	</div>
</body>
</html>