<?php
$this->extend("master-template");
?>
	
<?php $this->define("content"); ?>
	<div id="website" class="center">
		<h1>Azalea Health Innovations Advertisement #4</h2>
		<p><a class="back" onclick="window.history.go(-1);">(Back)</a></p>
		<?php echo $this->html->image("/images/charts4view.jpg", array("alt" => "Azalea Health Innovations  Advertisement #4", "title" => "Azalea Health Innovations  Advertisement #4")); ?>
	</div>
<?php $this->end(); ?>