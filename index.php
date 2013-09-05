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
	<title>Bored? Click the button</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" value="Bored? Play internet roulette and get a random word, Imgur photo, Wikipedia article, subreddit and more">
	<link rel="stylesheet" type="text/css" href="css/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:700,500,100">
	<link rel="stylesheet" type="text/css" href="css/iambored.css">
	<link rel="icon" type="image/png" href="/images/favicon-transparent.png">
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
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43820601-1', 'iambored.herokuapp.com');
  ga('send', 'pageview');

</script>

</body>
</html>