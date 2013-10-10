<?
$location = 'home';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap 101 Template</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<style type="text/css">
			body {
				padding-top: 70px;
			}
		</style>
	</head>
	<body>
		<header>
			<div class="container">
			<h1>My Website</h1>
			</div>
		</header>
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->

		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Playground</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
							<li class="Keywords">
								<a href="../Keywords/"> Keywords</a>
							</li>	
							<li class="Users">
								<a href="../Users/"> Users</a>
							</li>	
					
							
		
					
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
							<li>
								<a href="#">One more separated link</a>
							</li>
						</ul>
					</li>
				</ul>
				<p class="navbar-text pull-right">
					Signed in as <a href="#" class="navbar-link"> Brian Travis</a>
				</p>
				<form class="navbar-form navbar-left" role="search">

			</div>
			
</div>
</div>
<? include $view?>
		<pt src="http://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
			<script src="Scripts/main.js"></script>
		<? if(function_exists('Scripts')){
			Scripts();
			}
			?>
	</body>
</html>


