<?php $this->define("content"); ?>
	<div id="content-box">
		<?php $this->render("content"); ?>
		<hr/>
		<div id="home-name-footer">
			Copyright <?php echo date("Y"); ?> James Tracy | Powered by Backbone.php <?php echo Backbone::version(); ?>
		</div>
	</div>
	<div id="nav-box">
		<div class="nav-menu-item">
			<div class="nav-menu-bkg"></div>
			<div class="nav-menu-link"><a href="<?php echo Backbone::$request->link("/"); ?>">Home</a></div>
		</div>
		<div class="nav-menu-item">
			<div class="nav-menu-bkg"></div>
			<div class="nav-menu-link"><a href="<?php echo Backbone::$request->link("/resume/"); ?>">Resum&eacute;</a></div>
		</div>
		<div class="nav-menu-item">
			<div class="nav-menu-bkg"></div>
			<div class="nav-menu-link"><a href="<?php echo Backbone::$request->link("/reading/"); ?>">Reading</a></div>
		</div>
	</div>
<?php $this->end(); ?>