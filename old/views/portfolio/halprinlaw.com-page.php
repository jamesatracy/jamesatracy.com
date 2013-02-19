<?php
$this->extend("master-template");
?>
	
<?php $this->define("content"); ?>
	<div id="website" class="center">
		<h1>HalprinLaw (2012)</h2>
		<p><a class="back" onclick="window.history.go(-1);">(Back)</a></p>
		<?php echo $this->html->image("/images/halprinlaw.full.jpg", array("alt" => "HalprinLaw", "title" => "HalprinLaw")); ?>
		<?php echo $this->html->image("/images/halprinlaw.services.full.jpg", array("alt" => "HalprinLaw", "title" => "HalprinLaw")); ?>
	</div>
<?php $this->end(); ?>