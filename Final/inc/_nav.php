<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<?

	$pages = array(
	'supplier' => array(
		'url' => 'Views/Supplier/', 
		'section' => 'supplier', 
		'title' => 'Suppliers'), 
	'Users' => array( 
		'url' => 'Views/User/', 
		'section' => 'Users', 
		'title' => 'Users'), 
	'Items' => array(
		'url' => 'Views/Items/', 
		'section' => 'Items', 
		'title' => 'Products')
		);
		?>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->

		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Final</a>
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
								<a href="Views/Orders/">Orders</a>
							</li>
							<li>
								<a href="Views/BillingAddress/">BillingAddresses</a>
							</li>
							<li>
								<a href="Views/Categories/">Categories</a>
							</li>
							<li>
								<a href="Views/Comments/">Comments</a>
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
	
