<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>What Metal Band Are You? Quiz - Hell Yes!</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="page-wrap">
		<form id="start-quiz" method="post" action="test.php">
            <div class="overlay index">
		        <div class="quiz-overlay"></div>
		        <h1 class="index-headline">How Well Do You Know the Web?</h1>
		        <p class="index-sell">This quiz will reveal how much you know about the interwebs. </p>
                <input type="submit" id="submit" class="take-quiz-btn index-btn redglow" value="Take The Quiz" />
            </div>                        
	    </form>
	    <?php
	   /**
            * Top part is just a button to go to the actual test page.
            * Below are sharing buttons for Facebook and Twitter. Change these to match your own details.
            * One thing that needs improvement: The background should be an embedded image, 
            * or there should be an Open Graph image assigned.
            * Otherwise, Twitter and Facebook share these button images,
            * as they are the only "images" they can access on the index page.
            */
            ?>
	  <div class="share lb"><a href="http://www.facebook.com/" title="Share On Facebook" target="_blank"><img src="../imgs/fb.png" alt="Share this on Facebook" /></a></div>
          <div class="share rb"><a href="http://twitter.com/home/" title="Share On Twitter" target="_blank"><img src="../imgs/tw.png" alt="Share this on Twitter" /></a></div>
          <p class="shareprompt">Share This Quiz</p>
          <p class="designby shadow1"><span>Built by </span><a href=" ... "><img src="../imgs/ld.png" alt="Micro Website by ... " /></a></p>
	</div>
<script>
//   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
//   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
//   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
//   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

//   ga('create', 'UA-000000000-1', 'auto');
//   ga('send', 'pageview');
</script>
</body>
</html>
