
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
			<div class="well">
				<h1>Hello There!</h1>
				<div class="row">
					<p>
						This is the contact page, where you can, well contact me!
					</p>
					<p>
						<a class="btn btn-primary" href="#">learn More »</a>
					</p>
				</div>
			</div>

			<div class="col-lg-8 col-lg-offset-2">
				<h1> Contact me</h1>
				<form class="form-horizontal">
					<div class="form-group">
						<label for="email" class="col-md-2 control-label">Your Email</label>
						<div class="col-md-10">
							<input type="email" class="form-control" id="inputEmail1" placeholder="Enter your Email here">
						</div>
					</div>

					<div class="form-group">
						<label for="txt" class="col-md-2 control-label">Leave me a message!</label>
						<div class="col-md-10">
							<textarea class="form-control" id="txt" placeholder="Tell me a story"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-10">
							<input type="submit" class="btn btn-primary" value="Submit">
						</div>
					</div>

				</form>

			</div>

			<script src="http://code.jquery.com/jquery.js"></script>
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
			<script src="Scripts/main.js"></script>
			<script type="text/javascript">
			$(function(){
			$(".nav .contact").addClass("active").fadeOut().fadeIn();
			})
		</script>

	</body>
</html>