<?php
$this->extend("master-template");
?>
	
<?php $this->define("content"); ?>
	<div id="website" class="center">
		<h1>Azalea Health Innovations (2012)</h2>
		<p><a class="back" onclick="window.history.go(-1);">(Back)</a></p>
		<?php echo $this->html->image("/images/azaleahealth.jpg", array("alt" => "Azalea Health Innovations", "title" => "Azalea Health Innovations")); ?>
		<?php echo $this->html->image("/images/azaleahealth2.jpg", array("alt" => "Azalea Health Innovations", "title" => "Azalea Health Innovations")); ?>
	</div>
<?php $this->end(); ?>