<?php
$this->extend("master-template");
$this->extend("menu-template");
?>
	
<?php $this->define("content"); ?>
	<?php $this->display("name-header"); ?>
	<div id="home-name-description">
		<p>I am a Senior Developer with <a href="http://www.azaleahealth.com/">Azalea Health Innovations</a>, where I work on cutting-edge, cloud-based electronic health information technology.</p>
		<p>In addition to developing software applications for the web, my professional experience includes C/C++ programming and mobile handset development. I also have a Master's degree in the History of Science and have taught college level writing courses.</p>
	</div>
	<?php $this->display("links-footer"); ?>
<?php $this->end(); ?>