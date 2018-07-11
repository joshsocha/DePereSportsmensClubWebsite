<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//print_r($_SERVER);
$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$link);
$page = end($link_array);
$page = strtolower($page);
//echo $page;
switch ($page) {
	case 'home_page.php':
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: /"); 
		exit();
	case 'index.html':
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: /"); 
		exit();
	case 'rifle_range.html':
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: /Facilities/RifleRange"); 
		exit();
	case 'facilities.html':
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: /Facilities"); 
		exit();
	case 'join.html':
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: /Join"); 
		exit();
	case 'pistol.html':
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: /Leagues/Pistol"); 
		exit();
	case 'leagues.html':
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: /Leagues"); 
		exit();
	case 'winterfest.html':
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: /EventsAndNews/Winterfest"); 
		exit();
	case 'indoor_range.html':
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: /Facilities/IndoorRange"); 
		exit();
	case 'trap.html':
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: /Leagues/Trap"); 
		exit();
	case 'board_members.html':
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: /AboutUs/BoardMembers"); 
		exit();
	case '20-gun_raffle.html':
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: /EventsAndNews/20GunRaffle"); 
		exit();
	case 'hunter_s_safety.php'
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: /EventsAndNews/HuntersSafety"); 
		exit();
}
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<?php if(!in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) : ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96849732-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-96849732-1');
</script>
<?php endif; ?>
<style type="text/css">

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
}
</style>
</head>
<body>
	<div id="container">
		<h1><?php echo $heading; ?></h1>
		<p>Our site has been updated, you will need to update your bookmarks. You will be redirected to the home page in 5 seconds. If you are not <a href="/">click here</a>.</p>
		<?php
			echo $message;
			if(!in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))){
				header("Refresh:5; url=/");
			}
		?>
	</div>
</body>
</html>