<?php
// master view

// ****** STYLESHEETS
$this->prepend("css");
echo $this->html->stylesheet("/css/base.min.css");
echo $this->html->stylesheet("/css/styles.css");
$this->end();

// ****** SCRIPTS
$this->prepend("scripts");
echo $this->html->script("https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js");
echo $this->html->script("/js/common.js");
$this->end();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>James A. Tracy <?php echo ($this->get("title") ? " | ".$this->get("title") : ""); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="James A Tracy is a Web Developer with Azalea Health Innovations." />
	<?php $this->render("scripts"); ?>
	<?php $this->render("css"); ?>
</head>
<body>
	<?php $this->display("menubar-template"); ?>
	<div id="main">
		<div id="content" class="wrapper">
			<?php $this->render("content"); ?>
		</div>
	</div>
	<?php $this->display("footer-template"); ?>
</body>