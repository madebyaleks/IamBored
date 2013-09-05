<?php
require("../functions.php");

if(isset($_POST['play'])){
	selectSite();
};

?>
<! doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:700,500,100">
	<link rel="stylesheet" type="text/css" href="iambored-embed.css">
</head>
<body>
<section class="everything">
	<section class="flex-container">
		<form method="POST" target="/">
			<button name="play" value="yes" target="process"><?php buttonText(); ?></button>
		</form>
	</section>
</section>
</body
</html>