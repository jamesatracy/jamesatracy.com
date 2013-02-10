<?php
$this->extend("master-template");
$this->extend("menu-template");
?>
	
<?php $this->define("content"); ?>
	<div id="resume">
		<?php $this->display("name-header"); ?>
		<br/>
		<p><a href="<?php echo Backbone::$request->link("/docs/james-tracy-resume2013.pdf"); ?>">Download as PDF</a></p>
		
		<h1>Education</h1>
		<p>Master of Arts, History of Science, <a href="http://ucsd.edu">University of California San Diego</a>, 2010</p>
		<p>Bachelor of Arts, Computer Science, <a href="http://sandiego.edu">University of San Diego</a>, 2004</p>
		
		<br/>
		<h1>Skills</h1>
		<p>Web application development and design, software application architecture and object-oriented programming, user interface development and design, database programming, search engine optimization.</p>
		
		<p><strong>Programming Languages</strong></p>
		<p>C/C++, CSS, HTML, Java, Javascript, MySQL, PHP, XML</p>

		<p><strong>Frameworks &amp; Technologies</strong></p>
		<p>Ajax, <a href="http://www.backbonejs.org" target="_blank">Backbone.js</a>, Git, <a href="http://www.jquery.com" target="_blank">jQuery</a>, LAMP/WAMP, Perforce, phpMyAdmin, <a href="http://www.pusher.com" target="_blank">Pusher</a>, SVN, Win32, <a href="http://www.wordpress.org">Wordpress</a></p>

		<br/>
		<h1>Professional Experience</h1>

		<p><strong>Senior Developer, Azalea Health Innovations, Inc.</strong><br/>
		<em>September 2010 - Present</em></p>

		<div class="show-details" data-target="resume-ahi"><a href="javascript:void(0);">Show Details</a></div>
		<div id="resume-ahi" style="display:none">
			<ul>
				<li>Lead developer for <a href="http://www.azaleahealth.com/products/electronic-health-records/" target="_blank">Azalea EHR</a>, a cloud-based electronic health records platform.</li>
				<li>Lead developer for <a href="http://www.azaleahealth.com/products/patient-health-portal/" target="_blank">Azalea PHR</a>, a cloud-based patient health portal.</li>
				<li>Contributed to the successful certification of Azalea EHR for Meaningful Use Stage 1 (ONC's Standards &amp; Certification Criteria 2011).</li>
				<li>Successfully integrated third-party applications and tools to enhance or extend core products, including: Electronic Prescribing, Nuance Speech Recognition, and Real Time web technologies.</li>
				<li>Developed a custom JavaScript application framework and PHP/MySQL Restful API interfaces from the ground up.</li>
				<li>Design and maintenance of internal bug tracking software.</li>
				<li>Design and maintenance of websites.</li>
			</ul>
				
			<p>Technologies: HTML, CSS, PHP, Javascript, jQuery, Backbone.js, MySQL</p>
		</div>
		<br/>
		
		<p><strong>Senior Software Engineer, Kyocera Wireless Corp.</strong><br/>
		<em>April 2006 - September 2007</em></p>

		<div class="show-details" data-target="resume-kyocera2"><a href="javascript:void(0);">Show Details</a></div>
		<div id="resume-kyocera2" style="display:none">
			<ul>
				<li>Assisted with the integration of third party messaging (SMS and MMS), Java virtual machine, and browser clients with core user interface software.</li>
				<li>Provided supervision and consultation and worked on detailed software and code documentation.</li>
			</ul>
			<p>Technologies: C/C++, Windows, ARM Assembly</p>
		</div>
		<br/>
		
		<p><strong>Software Engineer, Kyocera Wireless Corp.</strong><br/>
		<em>March 2004 - April 2006</em></p>

		<div class="show-details" data-target="resume-kyocera1"><a href="javascript:void(0);">Show Details</a></div>
		<div id="resume-kyocera1" style="display:none">
			<ul>
				<li>Assisted in the maintenance and development of core user interface software, including the analysis and debugging of change requests, fixing software issues, and merging software changes. </li>
				<li>Designed, coded, and tested a Windows application that contained a suite of font tools.</li>
			</ul>
			<p>Technologies: C/C++, Windows, ARM Assembly</p>
		</div>
		<br/>
		
		<h1>GitHub Projects</h1>
		<div><a href="https://github.com/jamesatracy/Backbone.php">Backbone.php</a> (PHP Web Framework)</div>
		<div><a href="https://github.com/jamesatracy/Modulerizer.js">Modulerizer.js</a> (Javascript Moduler / File Loader)</div>
		<br/>
		
		<h1>Website Design</h1>
		<div><a href="<?php echo Backbone::$request->link("/portfolio/azaleahealth.com/"); ?>">www.azaleahealth.com</a></div>
		<div><a href="<?php echo Backbone::$request->link("/portfolio/halprinlaw.com/"); ?>">www.halprinlaw.com</a></div>
		<div><a href="<?php echo Backbone::$request->link("/portfolio/smithhospital.com/"); ?>">www.smithhospital.com</a></div>
		<br/>
		
		<h1>Academic Experience</h1>

		<p><strong>Teaching Assistant, University of California, San Diego</strong><br/>
		<em>September 2008 - June 2010</em></p>

		<div class="show-details" data-target="resume-ta"><a href="javascript:void(0);">Show Details</a></div>
		<div id="resume-ta" style="display:none">
			<ul>
				<li>Responsible for planning and leading student discussion sections, providing one on one support for students, and grading exams and papers.</li>
				<li>Taught college level writing, both formal and informal, in conjunction with the Sixth College Writing Program.</li> 
			</ul>
			<p>Courses: Sixth College Senior Practicum Writing, Controlling Life, Laws of Men and Laws of Nature, Culture, Art, &amp; Technology.</p>
		</div>
		<br/>
		
		<p><strong>Reader in History, University of California, San Diego</strong><br/>
		<em>September 2007 - June 2008</em></p>

		<div class="show-details" data-target="resume-reader"><a href="javascript:void(0);">Show Details</a></div>
		<div id="resume-reader" style="display:none">
			<ul>
				<li>Responsible for grading exams and papers for undergraduate courses in the department of history.</li>
			</ul>
			<p>Courses: Great Stories from the Hebrew Bible, Anthropology and the Hebrew Bible, History of Daosim in China, Science, Technology, & Law in America, The Atom Bomb and the Atomic Age.</p>
		</div>
		<br/>

		<p><strong>Research Assistant, University of San Diego</strong><br/>
		<em>Summer 2002</em></p>

		<div class="show-details" data-target="resume-sure"><a href="javascript:void(0);">Show Details</a></div>
		<div id="resume-sure" style="display:none">
			<ul>
				<li>Performed research in the area of automated computer information retrieval in conjunction with faculty member Dr. Eric Jiang.</li> 
				<li>Developed and implemented a working information retrieval system, based on the vector-space model, with a graphical user interface using C++ and Win32/MFC.</li>
				<li>Assessed the performance of a variety of different methods and algorithms and presented research results to other participants and professors.</li>
			</ul>
		</div>

		<br/>
		<h1>Presentations</h1>

		<p>"Battle of the Books: Science Education and America's Culture Wars," Invited Talk. June 12, 2010.</p>
		<p>"A Plea for History: Science and Religion in the Galileo Affair," Public Talk. April 13, 2010.</p>
		<p>"Was the Tennessee Anti-Evolution Law a Symbolic Protest?" Conference. February 5, 2010, January 23, 2010.</p>
		<p>"An Open Road to Learning? Evolution and the Politics of Education in North Carolina and Tennessee, 1925," Conference. October 12, 2009.</p>

		<br/>
		<h1>Awards &amp; Honors</h1>

		<p>UCSD Student Book Collection Competition Graduate Division Winner, 2010, "Charles Darwin: A History of Biography and Interpretation"</p>
		<p>Science Studies Program Research Travel Grant, 2009</p>
		<p>UCSD Student Book Collection Competition Graduate Division Winner, 2009, "The Great Monkey Trial"</p>
		<p>UCSD Student Book Collection Competition Graduate Division Winner, 2008, "Darwinism, Evolution, and Religion"</p>
		<p>History Department/Science Studies Fellowship, 2007-2008</p>
		<p>Summer Undergraduate Research Experience (SURE), University of San Diego, 2002</p>

		<?php $this->display("links-footer"); ?>
	</div>
<?php $this->end(); ?>