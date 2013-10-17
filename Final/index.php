<? include 'inc/_global.php'; ?>


<!DOCTYPE html>
<html>
  <head>
  	<style type="text/css">
			body {
				padding-top: 70px;
			}
		</style>
	</head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">

  </head>
  <body>
  	<?
  	include 'inc/_nav.php';?>
    <h1>This is the final</h1>
    
    <?
    
            $msg = 'Hello ';
                $name = 'Brian';
                include 'something.php';
        ?>

        <span class="label label-success"><?= $msg . $name ?></span>
        
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  </body>
</html>