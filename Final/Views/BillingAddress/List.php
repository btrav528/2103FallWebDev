<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type=t"text/css" rel="stylesheet"/>
<div class="container">
	<h2>Items</h2>

<table class="table table-hover table-bordered ">
	<thead>
	<tr>
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

	<tr><td><?=$rs['LineOne'] ?></td>
		<td><?=$rs['LineTwo'] ?></td>
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
