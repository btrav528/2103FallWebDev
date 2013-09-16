<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<?

	$pages = array(
	'home' => array(
		'url' => 'index.php', 
		'section' => 'home', 
		'title' => 'Home'), 
	'links' => array( 
		'url' => 'links.php', 
		'section' => 'links', 
		'title' => 'Links'), 
	'contact' => array(
		'url' => 'contact.php', 
		'section' => 'contact', 
		'title' => 'Contact Us')
		);
		$pages[] = array(
		'url' => 'store.php', 
		'section' => 'store', 
		'title' => 'Buy Our Stuff');
	?>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->

		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Playground</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<?
						foreach ($pages as $key => $data) :?>
							<li class=<?=$data['section']?>>
								<a href=<?=$data['url']?>> <?=$data['title']?></a>
							</li>	
					
							
					<?	endforeach;
					?>
					
					
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
	</nav>
	<pre class="container">
		<? echo json_encode($pages)?>
		</pre>
