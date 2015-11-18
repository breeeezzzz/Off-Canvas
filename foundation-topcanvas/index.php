<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Foundation Off-Canvas</title>
		<link rel="stylesheet" href="css/app.css" />
		<script src="bower_components/modernizr/modernizr.js"></script>
	</head>
	<body>

	<div class="container">
	  <div class="page">
	  
		<div class="off-canvas-wrap" data-offcanvas>
		  <div class="inner-wrap">
			<nav class="tab-bar">
			  <section class="left-small">
				<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
			  </section>
			</nav>

			<aside class="left-off-canvas-menu">
			  <ul class="off-canvas-list">
				<li><label>Foundation</label></li>
				<li><a href="#">Option 1</a></li>
				<li><a href="#" class="off-canvas-submenu-call">Option 2 <span class="right"> + </span></a></li>
								<ul class="off-canvas-submenu">
										<li><a href="#">Sub menu 1</a></li>
										<li><a href="#">Sub menu 2</a></li>
										<li><a href="#">Sub menu 3</a></li>
									</ul>
				<li><a href="#">Option 5</a></li>
				<li><a href="#">Option 6</a></li>

			  </ul>
			</aside>

			<section class="main-section">
				<div class="row">
					<div class="large-12 columns">
						<h1>Off-Canvas Testing</h1>
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns">
						<!-- main content goes here -->
						<p>Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire. Though the empire appears stable and powerful, it is slowly decaying in ways that parallel the decline of the Western Roman Empire. Hari Seldon, a mathematician and psychologist, has developed psychohistory, a new field of science and psychology that equates all possibilities in large societies to mathematics, allowing for the prediction of future events.</p>

					  <!-- close the off-canvas menu -->
					  <a class="exit-off-canvas"></a>

					</div>
				</div>
			
			</section>

		  <a class="exit-off-canvas"></a>

		  </div>
		</div>


	</div><!-- END .page -->
</div><!-- END .container -->

		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<script src="bower_components/foundation/js/foundation.min.js"></script>
		<script src="js/app.js"></script>
		  <script>
			$(document).foundation();
		  </script>
	</body>
</html>
