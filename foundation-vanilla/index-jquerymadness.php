<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation</title>
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
 
<body class="example ">

<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<div class="page-frame">
<div class="page">

	<nav class="offcanvas" role="navigation">
	  
		<ul>
		  
		  <li><a href="#"><i class="icon-home"></i> Home</a></li>
		  
		  <li>
			<a class="moveleft" href="#">Examples:</a>
			<ul>
			  <li class="current-parent current"><a class="current-parent current" href="index.html"><i class="icon-code"></i> Do Nothing Approach</a></li>
			  <li><a href="../footer-list/index.html"><i class="icon-code"></i> Footer Navigation</a></li>
			  <li><a href="../select-menu/index.html"><i class="icon-code"></i> Select Menu</a></li>
			  <li><a href="../simple-toggle/index.html"><i class="icon-code"></i> Menu Overlay</a></li>
			  <li><a href="../multi-toggle/index.html"><i class="icon-code"></i> Multi Toggle</a></li>
			  <li><a href="../off-canvas-slide/index.html"><i class="icon-code"></i> Off Canvas</a></li>
			  <li><a href="../off-canvas-slide/always-off-canvas.html"><i class="icon-code"></i> Always Off Canvas</a></li>
			  <li><a href="../clean-grid/index.html"><i class="icon-code"></i> Grid Based</a></li>
			  <li><a href="../the-flip/index.html"><i class="icon-code"></i> Backside Menu Flip</a></li>
			</ul>
		  </li>
		
		</ul>

	</nav>

	<div class="content-frame">

			<header class="header">
			  
			  <a class="menu-toggle toggle-me" href="#"><span class="icon-reorder"></span></a>
				
				<div class="container">
					
					<div class="row">
						<div class="large-12 columns">
							<div class="panel">
							<h2>Let's see you dance, sucka, you ain't got nothin' on me</h2>
							</div>
						</div>
					</div>
				
				</div>

			</header>
		
				<div class="row">
					<div class="large-12 columns">
						<div class="panel">
						<p>Let's see you dance, sucka, you ain't got nothin' on me</p>
						</div>
					</div>
				</div>


	</div><!-- END .content -->

</div><!-- END .content-frame -->
</div><!-- END .page -->
</div><!-- END .page-frame -->


	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
	<script>
		$(document).ready(function() {	
			window.scrollTo(0, 1);	
			$('.js #menu-toggle').click(function (e) {
				$('body').toggleClass('active');
				e.preventDefault();
			});
		});
	</script>

  </body>
</html>
