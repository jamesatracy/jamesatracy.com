<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <title>James A. Tracy <?php echo ($this->get("title") ? " | ".$this->get("title") : ""); ?></title>
        <meta name="description" content="James A Tracy is a web developer." />
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
		<?php $this->render("css"); ?>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body id="top">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="main">
			<div id="content" class="wrapper">
				<?php $this->render("content"); ?>
			</div>
			<br class="clear" />
			<footer>
				Copyright <?php echo date("Y"); ?> James Tracy. Built with Backbone.php & HTML5 Boilerplate.
			</footer>
			<div id="arrow-top"><a href="#top" title="Back to top"><img src="./img/arrow-up.png" /></a></div>
		</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<?php $this->render("scripts"); ?>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            /*var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));*/
        </script>
    </body>
</html>