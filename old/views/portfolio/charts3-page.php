<?php
$this->extend("master-template");
?>
	
<?php $this->define("content"); ?>
	<div id="website" class="center">
		<h1>Azalea Health Innovations Advertisement #3</h2>
		<p><a class="back" onclick="window.history.go(-1);">(Back)</a></p>
		<?php echo $this->html->image("/images/charts3view.jpg", array("alt" => "Azalea Health Innovations  Advertisement #3", "title" => "Azalea Health Innovations  Advertisement #3")); ?>
	</div>
<?php $this->end(); ?>