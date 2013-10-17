<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type=t"text/css" rel="stylesheet"/>
<div class="container">
	<h2>Shipping Addresses</h2>

<table class="table table-hover table-bordered ">
	<thead>
	<tr>
		<th>User ID</th>
		<th>
			Line One	
		</th>
		<th>
			Line Two
		</th>
		<th>City</th>
		<th>State</th>
		<th>Zip Code</th>
		<th>Country</th>
	</tr>
	</thead>
	<tbody>
<? foreach($model as $rs): ?>

	<tr><td><?=$rs['2013Fall_User_Id'] ?></td>
		<td><?=$rs['FirstLine'] ?></td>
		<td><?=$rs['SecondLine'] ?></td>
		<td><?=$rs['City'] ?></td>
		<td><?=$rs['State'] ?></td>
		<td><?=$rs['ZipCode'] ?></td>
		<td><?=$rs['Country'] ?></td>
		</tr>

<? endforeach ?>
</tbody>
</table>
</div>
<?
function Scripts(){ ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$('.table').dataTable();
	</script>
	<?} ?>
