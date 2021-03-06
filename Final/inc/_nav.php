<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
	</head>
	<?

	$pages = array('Items' => array('url' => 'Views/Items/', 'section' => 'Items', 'title' => 'Products'), 'Users' => array('url' => 'Views/User/', 'section' => 'Users', 'title' => 'Users'), 'supplier' => array('url' => 'Views/Supplier/', 'section' => 'supplier', 'title' => 'Suppliers'));
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
							<li class=<?=$data['section'] ?>>
								<a href=<?=$data['url'] ?>> <?=$data['title'] ?></a>
							</li>	
					
							
					<?	endforeach; ?>
					
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Options <b class="caret"></b></a>
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
								<a href="Views/Contact/">Contact Information</a>
							</li>
							<li>
								<a href="Views/Card/">Credit Card Information</a>
							</li>
							<li>
								<a href="Views/OrderContents/">Order Contents</a>
							</li>
							<li>
								<a href="Views/Shipping/">Shipping Addresses</a>
							</li>
							<li>
								<a href="Views/Shipping/">Shipping Addresses</a>
							</li>
							<li>
								<a href="Views/ViewHist/">Viewing History</a>
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
	
