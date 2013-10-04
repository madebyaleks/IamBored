<?php
require("functions.php");

?>
<! doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bored? Click the button</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" value="Bored? Play internet roulette and get a random word, Imgur photo, Wikipedia article, subreddit and more!">
	<link rel="stylesheet" type="text/css" href="css/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:700,500,100">
	<link rel="stylesheet" type="text/css" href="css/iambored.css">
	<link rel="icon" type="image/png" href="/images/favicon-transparent.png">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="white" />
</head>
<body>
<header class="overlay">
	<button class="new-site">New site!</button> <button class="help">?</button>
</header>
<iframe src="<?php if(isset($_POST['play'])){ selectSite(); }; ?>" ></iframe>
<?php require("analytics.php"); ?>
</body>
</html>