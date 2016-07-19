<!doctype html>
<html lang=en>
<head>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Fjord+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/normalize.css" type="text/css">

<?php

if(isset($_SESSION['choice']) && $_SESSION['choice'] == 'dark')
{
	echo '<link rel="stylesheet" href="css/mainDark.css" type="text/css">';
	$headerTitle = "Dark Side Chosen...";
	$home = 'Home-Dark';
}
elseif(isset($_SESSION['choice']) && $_SESSION['choice'] == 'light')
{
	echo '<link rel="stylesheet" href="css/mainLight.css" type="text/css">';
	$headerTitle = "Light Side Chosen...";
	$home = 'Home-Light';
}
else {
	echo '<link rel="stylesheet" href="css/mainNeutral.css" type="text/css">';
	$headerTitle = "Make Your Choice: Dark or Light";
	$home = 'Home';
}
?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title><?php echo (isset($_SESSION['choice']) ? ucfirst($_SESSION['choice']) : 'Welcome' ) ?></title>
	</head>

<?php
echo '
</head>
<body>
	<header>
				<div class="title">'.$headerTitle.'</div>
				<div class="linksContainer">
					<ul>
						<li><a href="index.php?page=welcome">'.$home.'</a></li>';
						if(isset($_SESSION['choice']))
						{
							echo '
							<li><a href="index.php?page=survey">Take Survey</a></li>
							<li><a href="index.php?page=results">View Results</a></li>';
						}
					echo'
					</ul>
				</div>
	</header>';
