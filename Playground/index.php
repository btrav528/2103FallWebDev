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
		
		<?
		include "nav.php";
		?>
		<div class="container">
						<div class="jumbotron">

				<h1>Hello World!</h1>
				<p>
					This is the 'playground' index page
				</p>
				<button type="button" class="btn btn-primary"<a href="learn.php"> Learn More Here</a></button>
				</div>
				<div class="row">
				<div class="col-sm-6 col-md-4">
				<h1> First Row</h1>
				<p>
				Text Text Text
				</p>
				<p>
				<a class="btn btn-primary" href="#">See More »</a>
				</p>
			</div>
			<div class= "col-sm-6 col-md-4">
				<h1>Second Row</h1>
				<p>
					Text Text Text
				</p>
				<p>
					<a class="btn btn-primary" href="#">See More »</a>
				</p>
			</div>
			<div class="col-sm-6 col-md-4">
				<h1>Third Row</h1>
				<p>
					Text Text Text
				</p>
				<p>
					<a class="btn btn-primary" href="#">See More »</a>
				</p>
			</div>
		</div>
		</div>

		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
			<script src="Scripts/main.js"></script>
		<script type="text/javascript">
			$(function(){
			$(".nav .index").addClass("active");
		})
		</script>
	</body>
</html>


