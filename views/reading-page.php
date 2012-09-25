<?php
$this->extend("master-template");
$this->extend("menu-template");
?>
	
<?php $this->define("content"); ?>
    <style type="text/css" media="screen">
        .gr_grid_container { margin-bottom: 10px; } 
        .gr_grid_book_container { /* customize book cover container div here */ 
          float: left; 
          width: 98px; 
          height: 160px; 
          padding: 0px 0px;
          overflow: hidden; 
        }
    </style>
	<div id="home-name-wrapper" class="relative">
		<div id="home-name">James A. Tracy</div>
		<div id="home-name-gravatar"><img src="http://www.gravatar.com/avatar/0fa60c9b65d1814105b5001043b90c2a.png" alt="James A Tracy Gravatar" /></div>
	</div>
	
	<br/>
		
    <div id="gr_grid_widget_1348538160"></div>
	<div class="clear"></div>
	<br/>
    <script src="http://www.goodreads.com/review/grid_widget/3732580.Currently%20Reading?cover_size=medium&hide_link=true&hide_title=&num_books=10&order=d&shelf=currently-reading&sort=date_added&widget_id=1348538160" type="text/javascript" charset="utf-8"></script>

	<div id="gr_grid_widget_1348538199"></div>
	<div class="clear"></div>
    <script src="http://www.goodreads.com/review/grid_widget/3732580.Recently%20Read?cover_size=medium&hide_link=true&hide_title=&num_books=10&order=d&shelf=read&sort=date_added&widget_id=1348538199" type="text/javascript" charset="utf-8"></script>
	

<?php $this->end(); ?>
