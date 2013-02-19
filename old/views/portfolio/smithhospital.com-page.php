<?php
$this->extend("master-template");
?>
	
<?php $this->define("content"); ?>
	<div id="website" class="center">
		<h1>SMITH Northview Hospital (2011)</h2>
		<p><a class="back" onclick="window.history.go(-1);">(Back)</a></p>
		<?php echo $this->html->image("/images/smithhospital.jpg", array("alt" => "SMITH Northview Hospital", "title" => "SMITH Northview Hospital")); ?>
		<?php echo $this->html->image("/images/smithhospital2.jpg", array("alt" => "SMITH Northview Hospital", "title" => "SMITH Northview Hospital")); ?>
	</div>
<?php $this->end(); ?>