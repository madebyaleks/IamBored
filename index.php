<?php
require("functions.php");

if(isset($_POST['play'])){
	selectSite();
};

?>
<! doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Internet roulette</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" value="Bored? Play internet roulette and get a random word, Imgur photo, Wikipedia article, subreddit and more">
	<link rel="stylesheet" type="text/css" href="css/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:700,500,100">
	<link rel="stylesheet" type="text/css" href="css/iambored.css">
</head>
<body>
<section class="everything">
	<section class="flex-container">
		<form method="POST" target="/">
			<button id="bigbluebutton" name="play" value="yes" target="process"><?php buttonText(); ?></button>
		</form>
	</section>
</section>
<footer>
<p>A thing <a href="https://twitter.com/madebyaleks">Made by Aleks</a> | <a href="about">What is this?</a> | <span class="warning"><b>NOTE:</b> You might get <abbr title="Not Safe For Work">NSFW</abbr> content!</span>
</footer>
<?php toggleWarning(); ?>
</body>
</html>