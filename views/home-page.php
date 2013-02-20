<?php
$this->extend("master-template");
?>
	
<?php $this->define("content"); ?>
	<section id="home-main">
		<header id="home-main-header" class="center">
			<h1>James A Tracy</h1>
			<div id="home-main-desc">
				<p>I am a Senior Developer and Web Application Engineer with Azalea Health, where I work on web and cloud-based electronic health records, practice management, and patient portal systems.</p>
			</div>
			<div id="home-main-icons">
				<ul>
					<li><a href="mailto:james.a.tracy@gmail.com"><img src="<?php echo Backbone::$request->link("/img/mail.png"); ?>" width="64px" height="64px" alt="Email" title="Email" /></a></li>
					<li><a href="http://www.twitter.com/jamesatracy" target="_blank"><img src="<?php echo Backbone::$request->link("/img/twitter.png"); ?>" width="64px" height="64px" alt="Twitter" title="Twitter" /></a></li>
					<li><a href="http://www.linkedin.com/in/jamesatracy" target="_blank"><img src="<?php echo Backbone::$request->link("/img/linkedin.png"); ?>" width="64px" height="64px" alt="LinkedIn" title="LinkedIn" /></a></li>
					<li><a href="https://plus.google.com/u/0/104617833000421098021/posts" target="_blank"><img src="<?php echo Backbone::$request->link("/img/googleplus.png"); ?>" width="64px" height="64px" alt="Google+" title="Google+" /></a></li>
				</ul>
				<div class="clear"></div>
			</div>
			<p><a href="./download/james-tracy-resume2013.pdf">Download Resume</a></p>
		</header>
	</section>
	
	<hr/>
	
	<section id="websites" class="top-level">
		<header>
			<h2 class="header">Websites</h2>
		</header>
	
		<section class="column">
			<img src="./img/azaleahealth.small.jpg" width="380px" height="954px" />
		</section>
		
		<section class="column">
			<img src="./img/halprinlaw.small.jpg" width="380px" height="569px" />
			<img src="./img/smithhospital.small.jpg" width="380px" height="689px" />
		</section>
	</section>
	
	<hr/>
	
	<section id="projects" class="top-level">
		<header>
			<h2 class="header">Projects</h2>
		</header>
		
		<section class="column">
			<h3>Azalea EHR</h3>
			<p class="left">Designed and developed overall platform and user interface for a web and cloud based Electronic Health Records and Practice Management application.</p>
			<p><a href="http://www.azaleahealth.com/products/electronic-health-records/" target="_blank">Go to product page</a></p>
			<ul class="tags">
				<li>HTML</li>
				<li>CSS</li>
				<li>Javascript</li>
				<li>jQuery</li>
				<li>Backbone.js</li>
				<li>PHP</li>
				<li>MySQL</li>
			</ul>
			
			<hr/>
			
			<h3>Real-time Patient Chart</h3>
			<p class="left">Designed and developed a web based medical charting system as part of Azalea EHR that allows the chart to be edited simultaneously and in real-time by multiple users. Makes use of the Pusher.js real-time web library.</p>
			<ul class="tags">
				<li>HTML</li>
				<li>CSS</li>
				<li>Javascript</li>
				<li>jQuery</li>
				<li>Backbone.js</li>
				<li>Pusher.js</li>
				<li>PHP</li>
				<li>MySQL</li>
			</ul>
			
			<hr/>

			<h3>Nuance SpeechAnywhere</h3>
			<p class="left">Integrated Nuance's SpeechAnywhere web based speech recogniztion software for healthcare into Azalea EHR to support physician dictation.</p>
			<ul class="tags">
				<li>Javascript</li>
			</ul>
			
			<hr/>
			
			<h3>DevRequests</h3>
			<p class="left">Developed an internal development request system for tracking bugs and feature requests, assigning tasks to developers, and managing testing and release cycles.</p>
			<ul class="tags">
				<li>Javascript</li>
				<li>PHP</li>
				<li>MySQL</li>
			</ul>
			
			<hr/>
			
			<h3>Backbone.php</h3>
			<p class="left">Backbone.php, much like its javascript namesake, is a small collection of php classes that provide structure or scaffolding for a php application or php powered website. It follows the Model-View-Controller (MVC) convention and includes classes for handling routes, database backed models, and HTML views.</p>
			<p><a href="https://github.com/jamesatracy/Backbone.php" target="_blank">Go to GitHub page</a></p>
			<ul class="tags">
				<li>PHP</li>
				<li>MySQL</li>
			</ul>
			
			<hr/>
			
			<h3>Font Manager</h3>
			<p class="left">Developed an internal font manager tool for Kyocera-Wireless for the purpose of generating and visually editing bitmap fonts for use on mobile handset devices.</p>
			<ul class="tags">
				<li>C++</li>
				<li>Win32</li>
			</ul>
		</section>
		
		<section class="column">
			<h3>Azalea PHR</h3>
			<p class="left">Developed a web and cloud based Patient Health Records system as an extension of Azalea EHR that allows providers to provide their patients with online access to their health records.</p>
			<p><a href="http://www.azaleahealth.com/products/patient-health-portal/" target="_blank">Go to product page</a></p>
			<ul class="tags">
				<li>HTML</li>
				<li>CSS</li>
				<li>Javascript</li>
				<li>jQuery</li>
				<li>Backbone.js</li>
				<li>PHP</li>
				<li>MySQL</li>
			</ul>
			
			<hr/>
			
			<h3>Patient Scheduler</h3>
			<p class="left">Implemented a web based patient appointment scheduling application as part of Azalea EHR and Azalea PM. Appointment changes are updated in real-time using the Pusher.js real-time web library.</p>
			<ul class="tags">
				<li>HTML</li>
				<li>CSS</li>
				<li>Javascript</li>
				<li>jQuery</li>
				<li>Backbone.js</li>
				<li>Pusher.js</li>
				<li>PHP</li>
				<li>MySQL</li>
			</ul>
			
			<hr/>
			
			<h3>Secure Messaging</h3>
			<p class="left">Implemented a web based messaging (e-mail) system as part of Azalea EHR and Azalea PM for the sending and receiving of HIPAA secure internal messages.</p>
			<ul class="tags">
				<li>HTML</li>
				<li>CSS</li>
				<li>Javascript</li>
				<li>jQuery</li>
				<li>Backbone.js</li>
				<li>PHP</li>
				<li>MySQL</li>
			</ul>
			
			<hr/>
			
			<h3>Modulerizer.js</h3>
			<p class="left">Modulerizer.js is a javascript library that contains loader functionality and dependency management utilities that has no other external dependencies.</p>
			<p><a href="https://github.com/jamesatracy/Modulerizer.js" target="_blank">Go to GitHub page</a></p>
			<ul class="tags">
				<li>Javascript</li>
			</ul>
			
			<hr/>
			
			<h3>Core User Interface</h3>
			<p class="left">Assisted in the maintenance and development of core user interface software, including the analysis and debugging of change requests, fixing software issues, and merging software changes on mobile handset devices at Kyocera-Wireless. Assisted with the integration of third party messaging, Java virtual machine, and browser clients with core user interface software.</p>
			<ul class="tags">
				<li>C</li>
				<li>BREW</li>
			</ul>
			
		</section>
		<div class="clear"></div>
	</section>
	
	<hr/>
	
	<section id="art" class="top-level">
		<h2 class="header">Art</h2>
		
		<section class="column">
			<a href="<?php echo Backbone::$request->link("/img/charts1.jpg"); ?>"><?php echo $this->html->image("/img/charts1.small.jpg", array("alt" => "Azalea Health Innovations Advertisement #1", "title" => "Azalea Health Innovations #1", "width" => "380px", "height" => "294px")); ?></a>
			<a href="<?php echo Backbone::$request->link("/img/charts3.jpg"); ?>"><?php echo $this->html->image("/img/charts3.small.jpg", array("alt" => "Azalea Health Innovations Advertisement #3", "title" => "Azalea Health Innovations #3", "width" => "380px", "height" => "268px")); ?></a>
		</section>
		
		<section class="column">
			<a href="<?php echo Backbone::$request->link("/img/charts2.jpg"); ?>"><?php echo $this->html->image("/img/charts2.small.jpg", array("alt" => "Azalea Health Innovations Advertisement #2", "title" => "Azalea Health Innovations Advertisement #2", "width" => "380px", "height" => "266px")); ?></a>
			<a href="<?php echo Backbone::$request->link("/img/charts4.jpg"); ?>"><?php echo $this->html->image("/img/charts4.small.jpg", array("alt" => "Azalea Health Innovations Advertisement #4", "title" => "Azalea Health Innovations Advertisement #4", "width" => "380px", "height" => "299px")); ?></a>
		</section>
	</section>
	
	<hr/>
	
	<section id="reading" class="top-level">
		<h2 class="header">Reading</h2>
		<section id="reading-contents">
			<div id="gr_grid_widget_1348538160"></div>
			<div class="clear"></div>
			<br/>
			<script src="http://www.goodreads.com/review/grid_widget/3732580.Currently%20Reading?cover_size=medium&hide_link=true&hide_title=&num_books=16&order=d&shelf=currently-reading&sort=date_added&widget_id=1348538160" type="text/javascript" charset="utf-8"></script>

			<div id="gr_grid_widget_1348538199"></div>
			<div class="clear"></div>
			<script src="http://www.goodreads.com/review/grid_widget/3732580.Recently%20Read?cover_size=medium&hide_link=true&hide_title=&num_books=16&order=d&shelf=read&sort=date_added&widget_id=1348538199" type="text/javascript" charset="utf-8"></script>
		</section>
	</section>
<?php $this->end(); ?>