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