<?php
$this->extend("master-template");
?>
	
<?php $this->define("content"); ?>
	<div id="website" class="center">
		<h1>Azalea Health Innovations Advertisement #1</h2>
		<p><a class="back" onclick="window.history.go(-1);">(Back)</a></p>
		<?php echo $this->html->image("/images/charts1view.jpg", array("alt" => "Azalea Health Innovations  Advertisement #1", "title" => "Azalea Health Innovations  Advertisement #1")); ?>
	</div>
<?php $this->end(); ?>