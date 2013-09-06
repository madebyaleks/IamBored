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
<!-- GoSquared -->
<script type="text/javascript">
  var GoSquared = {};
  GoSquared.acct = "GSN-489055-F";
  (function(w){
    function gs(){
      w._gstc_lt = +new Date;
      var d = document, g = d.createElement("script");
      g.type = "text/javascript";
      g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
      var s = d.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(g, s);
    }
    w.addEventListener ?
      w.addEventListener("load", gs, false) :
      w.attachEvent("onload", gs);
  })(window);
</script>
</body>
</html>