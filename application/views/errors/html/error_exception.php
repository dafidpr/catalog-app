<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https' : 'http');
$base_url .= '://' . $_SERVER['HTTP_HOST'];
$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="<?=$base_url;?>assets/css/app-light.css">
	<link rel="stylesheet" href="<?=$base_url;?>assets/css/feather.css">
	<style>
		.header {
			width: 150px;
		}

		.header .brand-sm {
			width: 100%!important;
		}

		::-webkit-scrollbar {
			width: 3px!important;
		}

		::-webkit-scrollbar-thumb {
			background: rgba(220, 220, 220, 1);
		}
	</style>
</head>
<body>
	<div class="header mx-auto">
		<svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
			<g>
				<polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
				<polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
				<polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
			</g>
		</svg>
	</div>
	<br>
	<h3 class="text-center">An uncaught Exception was encountered</h3>
	<p class="col-md-6 col-12 mx-auto">
		Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt suscipit perferendis veniam laboriosam error repellat iusto. Est fuga sequi esse, corporis illum reprehenderit, sunt mollitia sapiente praesentium quaerat nihil qui.
	</p>

	<br>
	<h5 class="text-center">Error Message :</h5>
	<div class="col-md-6 col-12 mx-auto border shadow-sm" style="height: 250px;overflow-y: auto;text-align: left!important;padding: 0;">
		<table class="table table-striped">
			<tr>
				<th>Severity</th>
				<td>:</td>
				<td>Warning</td>
			</tr>
			<tr>
				<th>Type</th>
				<td>:</td>
				<td><?=get_class($exception);?></td>
			</tr>
			<tr>
				<th>Filename</th>
				<td>:</td>
				<td><?=$exception->getFile();?></td>
			</tr>
			<tr>
				<th>Line number</th>
				<td>:</td>
				<td><?=$exception->getLine();?></td>
			</tr>
			<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>
				<tr>
					<th style="vertical-align: top!important">Backtrace</th>
					<td style="vertical-align: top!important">:</td>
					<td>
						<?php foreach (debug_backtrace() as $error): ?>
					
							<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>
					
								<p style="margin-left:10px">
								File: <?php echo $error['file'] ?><br />
								Line: <?php echo $error['line'] ?><br />
								Function: <?php echo $error['function'] ?>
								</p>
					
							<?php endif ?>
					
						<?php endforeach ?>
					</td>
				</tr>
			
			<?php endif ?>
		</table>
		
	</div>
	<br><br>
</body>
</html>