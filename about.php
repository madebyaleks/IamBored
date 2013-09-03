<?php require("functions.php"); ?>
<! doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Internet roulette</title>
	<meta name="description" value="Bored? Play internet roulette and get a random word, Imgur photo, Wikipedia article, subreddit and more">
	<link rel="stylesheet" type="text/css" href="css/normalize.min.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:700,500,100">
	<link rel="stylesheet" type="text/css" href="css/iambored<?php cssVersion();?>">
</head>
<body>
<section class="everything">
	<h1>About this thing</h1>
	<p>
		<b>The backstory:</b>
	</p>
	<p>I was home, sick and had absolutley nothing to do. I've spent a good 3 hours at Reddit, Imgur and so on. Then I remembered the random function. And then I got the idea to make this.</p>

	<p><b>How it works</b></p>
	<p>
		<em>For non-developers:</em><br>
		You click the big blue button on the front page, a new tab opens and there ou go. It's actually that simpe!
	</p>
	<p>
		<em>For developers & geeks:</em> <br>
		The site is served by Heroku. It's written in php, html and css. No JavaScript at all. <br>
		When you click the button it submits a form. This form tells php to get a random string (url) from an array. It uses the <code>shuffle</code> function to do this. From there it redirects the user using the <code>header</code> function.
	</p>
</section>
<footer>
<p>A thing <a href="http://twitter.com/madebyaleks">Made by Aleks</a> | <a href="about">What is this?</a> | <span class="warning"><b>NOTE:</b> The sites selected are 100% random. You might get <abbr title="Not Safe For Work">NSFW</abbr> content!</span>
</footer>
</body
</html>