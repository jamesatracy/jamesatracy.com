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
					<a href="<?php echo Backbone::$request->link("/portfolio/azaleahealth.com/"); ?>"><?php echo $this->html->image("/images/azaleahealth.com.thumb.jpg", array("alt" => "Azalea Health Innovations", "title" => "Azalea Health Innovations", "width" => "250px", "height" => "182px")); ?></a>
				</td>
				<td class="top middle">
					<a href="<?php echo Backbone::$request->link("/portfolio/halprinlaw.com/"); ?>"><?php echo $this->html->image("/images/halprinlaw.com.thumb.jpg", array("alt" => "HalprinLaw", "title" => "HalprinLaw")); ?></a>
				</td>
			</tr>
			<tr>
				<td class="top middle">
					<a href="<?php echo Backbone::$request->link("/portfolio/smithhospital.com/"); ?>"><?php echo $this->html->image("/images/smithhospital.com.thumb.jpg", array("alt" => "SMITH Northview Hospital", "title" => "SMITH Northview Hospital")); ?></a>
				</td>
				<td class="top middle">
				</td>
			</tr>
		</table>
		
		<br/>
		<h1>Art</h1>
		<table width="100%">
			<tr>
				<td class="top middle">
					<a href="<?php echo Backbone::$request->link("/portfolio/charts1/"); ?>"><?php echo $this->html->image("/images/charts1thumb.jpg", array("alt" => "Azalea Health Innovations Advertisement #1", "title" => "Azalea Health Innovations #1", "width" => "250px", "height" => "182px")); ?></a>
				</td>
				<td class="top middle">
					<a href="<?php echo Backbone::$request->link("/portfolio/charts2/"); ?>"><?php echo $this->html->image("/images/charts2thumb.jpg", array("alt" => "Azalea Health Innovations Advertisement #2", "title" => "Azalea Health Innovations Advertisement #2")); ?></a>
				</td>
			</tr>
			<tr>
				<td class="top middle">
					<a href="<?php echo Backbone::$request->link("/portfolio/charts3/"); ?>"><?php echo $this->html->image("/images/charts3thumb.jpg", array("alt" => "Azalea Health Innovations Advertisement #1", "title" => "Azalea Health Innovations #3", "width" => "250px", "height" => "182px")); ?></a>
				</td>
				<td class="top middle">
					<a href="<?php echo Backbone::$request->link("/portfolio/charts4/"); ?>"><?php echo $this->html->image("/images/charts4thumb.jpg", array("alt" => "Azalea Health Innovations Advertisement #2", "title" => "Azalea Health Innovations Advertisement #4")); ?></a>
				</td>
			</tr>
		</table>
	</div>
<?php $this->end(); ?>