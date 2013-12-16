<?

function GetConnection() {
	global $sql_password;
	$conn = new mysqli('localhost', 'n02207313', $sql_password, 'n02207313_db');
	return $conn;

}

function FetchAll($sql) {
	$sql = "SELECT name FROM plotkinm_db.US_Zip_Codes WHERE name LIKE '%$autocomplete_value%'";
	$ret = array();
	$conn = GetConnection();
	$result = $conn -> query($sql);
	echo $conn -> error;

	while ($rs = $result -> fetch_assoc()) {
		$ret[] = $rs;
	}

	$conn -> close();
	return $ret;
}
?>
<script>
	function getBox() {
		var box = $('input.textbox').val();
		return box;
	}

	function getTag() {
		var tag=getBox();

	}

</script>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">

	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

	</style>
</head>
<h1>Enter a city!</h1>
<div class="form-group">
	<label for="City" class="col-sm-2 control-label"></label>
	<div class="col-sm-10">
		<input type="text" name="textbox" class ="textbox" id="q" placeholder="Enter start of city name" class="form-control " />
	</div>

</div>
