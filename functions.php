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
		'Show me something!',
		'Click me!',
	);
	shuffle($button_text);
	$chosen_text = ($button_text[0]);
	print($chosen_text);
}


function cssVersion() {
	if(!isset($_GET['beta'])){
		print(".min.css");
	}
	
	else {
		print(".css");
	}
}

function fbGetUser() {
require 'fb-sdk/src/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '569703843066225',
  'secret' => '18fda0f3e7a766d3edbdc7097e7ad845',
));

// Get User ID
$user = $facebook->getUser();
}
?>