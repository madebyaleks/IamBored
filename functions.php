<?php
function selectSite() {
	require('sites.php');	
	
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
		'Hello!',
		'Here I am!',
	);
	shuffle($button_text);
	$chosen_text = ($button_text[0]);
	print($chosen_text);
}

function toggleWarning() {
if(isset($_GET['warning'])){
	print("<script type=\"text/javascript\">document.getElementById('bigbluebutton').onclick = function(){return confirm (\"NOTE: The sites are randomly chosen. You might get NSFW content! Is that alright?\");};</script>");
};
}
?>