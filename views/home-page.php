<?php
$this->extend("master-template");
$this->extend("menu-template");
?>
	
<?php $this->define("content"); ?>
	<div id="home-name-wrapper" class="relative">
		<div id="home-name">James A. Tracy</div>
		<div id="home-name-gravatar"><img src="http://www.gravatar.com/avatar/0fa60c9b65d1814105b5001043b90c2a.png" alt="James A Tracy Gravatar" /></div>
	</div>
	<div id="home-name-description">
		I am a software engineer, writer, and history buff living in Valdosta, GA. Currently I am a Web Developer with <a href="http://www.azaleahealth.com/">Azalea Health Innovations</a>, where I work on cutting-edge cloud-based electronic health information technology.
	</div>
	<hr/>
	<div id="home-name-links">
		<a href="http://www.linkedin.com/in/jamesatracy"><?php echo $this->html->image("/images/linkedin.png", array("alt" => "LinkedIn Profile")); ?></a>
		<a href="https://github.com/jamesatracy"><?php echo $this->html->image("/images/github.png", array("alt" => "GitHub Profile")); ?></a>
		<a href="http://www.twitter.com/jamesatracy"><?php echo $this->html->image("/images/twitter.png", array("alt" => "Twitter Profile")); ?></a>
	</div>
<?php $this->end(); ?>