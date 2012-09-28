<?php
$this->extend("master-template");
$this->extend("menu-template");
?>
	
<?php $this->define("content"); ?>
	<div id="resume">
		<?php $this->display("name-header"); ?>
		<br/>
		<h1>Website Design</h1>
		<table width="100%">
			<tr>
				<td class="top middle">
					<?php echo $this->html->image("/images/azaleahealth.com.thumb.jpg", array("alt" => "Azalea Health Innovations", "title" => "Azalea Health Innovations")); ?>
				</td>
				<td class="top middle">
					<?php echo $this->html->image("/images/halprinlaw.com.thumb.jpg", array("alt" => "HalprinLaw", "title" => "HalprinLaw")); ?>
				</td>
			</tr>
			<tr>
				<td class="top middle">
					<?php echo $this->html->image("/images/smithhospital.com.thumb.jpg", array("alt" => "SMITH Hospital", "title" => "SMITH Hospital")); ?>
				</td>
				<td class="top middle">
				</td>
			</tr>
		</table>
	</div>
<?php $this->end(); ?>