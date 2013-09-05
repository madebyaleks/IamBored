<?php
function selectSite() {
	$sites = array(
		'http://reddit.com/r/random',
		'https://en.wikipedia.org/wiki/Special:Random',
		'http://imgur.com/random',
		'http://dynamic.xkcd.com/random/comic/',
		'http://www.urbandictionary.com/random.php',
	);
	shuffle($sites);
	$the_chosen_one = ($sites[0]);
	header("location: $the_chosen_one");
}

function buttonText() {
	$button_text = array(
		'I\'m bored!',
		'Play internet roulette!',
		'Show me a site!',
		'Click me!',
		'Do NOT click me',
	);
	shuffle($button_text);
	$chosen_text = ($button_text[0]);
	print($chosen_text);
}

function toggleWarning() {
if(isset($_GET['warnings'])){
	print("<script type=\"text/javascript\">document.getElementById('bigbluebutton').onclick = function(){return confirm (\"NOTE: The sites are randomly chosen. You might get NSFW content! Is that alright?\");};</script>");
};
}
?>