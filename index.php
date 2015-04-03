<?php
require('includes/functions.php');
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>James J. Sawczuk - Software Engineer</title>
<?php load_stylesheet('style', array('media' => 'screen')); ?>
<?php load_stylesheet('print', array('media' => 'print'), true); ?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="keywords" content="jimmy, sawczuk, james, resume, php, html, css, mysql, c#, mongodb, developer, software, engineer, go, programmer" />
<meta name="description" content="The professional resume of James J. (Jimmy) Sawczuk, a web and Windows software engineer." />
<link media="print" rel="Alternate" href="/resume.pdf">
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3634519-13']);
  _gaq.push(['_trackPageview']);

  (function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>

<div id="content">
	<div class="container">
		<h2>
			1134 Autumn Circle <span class="dot">&middot;</span> Columbia, SC 29206<br />
			<b>phone</b> (440) 796-7806 <span class="dot">&middot;</span>
			<b>e-mail</b> <a href="mailto:me@jimmysawczuk.com" target="_blank">me@jimmysawczuk.com</a> <span class="dot">&middot;</span>
			<b>web</b> <a href="http://www.jimmysawczuk.com" target="_blank">www.jimmysawczuk.com</a>
		</h2>
		<h1>James J. Sawczuk</h1>

		<div class="block">
			<h3>Education</h3>
			<div class="education">
				<div class="dates">
					8/2005 – 5/2009
				</div>

				<div class="school">
					Case Western Reserve University
				</div>

				<div class="city">
					Cleveland, OH
				</div>

				<div class="degree">
					Bachelor of Science, Computer Science<br />
					Minor, Mathematics
				</div>
			</div>
		</div>

		<div class="block">
			<h3>Experience</h3>
			<div class="experience">
				<div class="dates">
					6/2009 – present
				</div>

				<div class="company">
					Louddoor, LLC
				</div>

				<div class="city">
					Columbia, SC
				</div>

				<div class="title">
					Software Engineer
				</div>

				<ul class="extra">
					<li>Developed highly-scalable web applications using a LAMP stack deployed on Amazon EC2</li>
					<li>Used a number of other technologies such as memcache, Redis, and node.js in production</li>
					<li>Spearheaded the development of a business pivot to Facebook Page audience analytics</li>
					<li>Prototyped most of the analytics algorithms and systems used in the company</li>
					<li>Consulted on a statistical study of Facebook fan engagement vs. age for Coca-Cola to present at a conference</li>
					<li>Designed and implemented a rich persona definition API in both Go and PHP which is still used for most of the company's analytics work</li>
					<li>Designed and implemented a worker daemon in Go that schedules and runs thousands of analytic tasks per day</li>
					<li>Designed and implemented a datamining program in Go to find "interesting" crosstabs for clients</li>
				</ul>
			</div>

			<div class="experience">
				<div class="dates">
					6/2007 – 5/2009
				</div>

				<div class="company">
					Lazorpoint, LLC
				</div>

				<div class="city">
					Cleveland, OH
				</div>

				<div class="title">
					Application Developer - Intern<br />
					Client Services Engineer - Intern
				</div>

				<ul class="extra">
					<li>Assisted clients with basic PC issues as well as network, server and printer issues</li>
					<li>Made recommendations for hardware and software upgrades for various clients</li>
					<li>Continually monitored clients’ networks to ensure continued stability</li>
					<li>Worked with other engineers to standardize a network monitoring system</li>
					<li>Created custom, data-driven applications for various clients</li>
					<li>Gained experience in .NET development, report development and handheld development</li>
					<li>Worked with other developers to standardize practices including application deployment techniques, version control management, and product testing standards</li>
				</ul>
			</div>

			<div class="experience">
				<div class="dates">
					5/2006 – 7/2006
				</div>

				<div class="company">
					City of Mentor
				</div>

				<div class="city">
					Mentor, OH
				</div>

				<div class="title">
					Engineering Intern
				</div>

				<ul class="extra">
					<li>Assisted in the civil engineering department with day-to-day tasks</li>
				</ul>
			</div>

			<div class="experience">
				<div class="dates">
					11/2003 – 8/2005
				</div>

				<div class="company">
					Perry Local Schools IS Department
				</div>

				<div class="city">
					Perry, OH
				</div>

				<div class="title">
					Web Programmer/Designer
				</div>

				<ul class="extra">
					<li>Content management and addition for faculty and staff on the main district website</li>
					<li>Worked with other students on several larger projects, including a high school course registrar and a course database complete with objectives</li>
				</ul>
			</div>
		</div>

		<div class="block">
			<h3>Skills</h3>
			<div class="normal_list">
				<ul>
					<li><b>Programming languages:</b> Extensive experience with Go, PHP (standard and MVC paradigms), Javascript/jQuery (some Backbone.js); experience in C#, C++, shell scripting</li>
					<li><b>APIs:</b> Extensive experience with the Facebook platform (Graph API, Canvas apps); experience with the Twitter, Github API</li>
					<li><b>Databases:</b> Extensive experience with MySQL and SQL Server development/optimization; some experience with MongoDB, MySQL administration</li>
					<li><b>Operating Systems:</b> Extensive experience with Windows 98 through Windows 7, Mac OS X; experience in Linux (desktop, terminal, and programming), Amazon EC2 set-up and administration</li>
					<li><b>Other:</b> Experience with Subversion, Mercurial, Git, and CVS version control, Memcache, Redis</li>
				</ul>
			</div>
		</div>

		<div class="block">
			<h3>Other</h3>
			<div class="normal_list">
				<ul>
					<li>Created a small blog website that operated for almost four years. Users were allowed to upload photos, write journal entries, etc. Source available upon request.</li>
					<li>Implemented and <a href="http://github.com/jimmysawczuk/jimmysawczuk.com">open-sourced</a> a WordPress theme from scratch for my personal blog.</li>
					<li>Created and currently administer a website frontend and Google Apps-based backend of a local church technology stack for about 25 users, including e-mail, calendars, chat and a custom website.</li>
					<li>Completed the inaugural free <a href="https://www.coursera.org/course/ml">machine learning class</a> from Stanford and Coursera with a final score of 100%.</li>
				</ul>
			</div>

			<div class="normal_list">
				<ul>
					<li><b>Microsoft Certified Professional ID</b>: 6635414</li>
					<li><b>Stack Overflow:</b> <a href="http://www.stackoverflow.com/users/350278/jimmy-sawczuk">Jimmy Sawczuk</a></li>
					<li><b>GitHub</b>: <a href="http://www.github.com/jimmysawczuk">github.com/jimmysawczuk</a></li>
					<li><b>BitBucket</b>: <a href="http://www.bitbucket.org/jimmysawczuk">bitbucket.org/jimmysawczuk</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div id="footer">
	&copy; <?php echo date("Y"); ?> Jimmy Sawczuk &middot;
	<a href="http://github.com/jimmysawczuk/resume" target="_blank">Open-sourced on Github</a> &middot;
	<?php echo git_revision(); ?>
	League Gothic font provided by <a href="http://www.theleagueofmoveabletype.com" target="_blank">The League of Moveable Type</a> &middot;
	Last modified on <?php echo @date("F j, Y", @filemtime(__FILE__)); ?>
</div>

<div id="print_footer">
	<div class="container">
		&copy; <?php echo date("Y"); ?> Jimmy Sawczuk &middot;
		<?php echo print_git_revision(); ?>
		Printed on <?php echo date("F j, Y"); ?>
	</div>
</div>
</body>
</html>
