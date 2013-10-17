<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type=t"text/css" rel="stylesheet"/>
<div class="container">
	<h2>Users</h2>

<table class="table table-hover table-bordered ">
	<thead>
	<tr>
		<th>
			First Name
		</th>
		<th>
			Last Name
		</th>
		<th>Type</th>
	</tr>
	</thead>
	<tbody>
<? foreach($model as $rs): ?>

	<tr><td><?=$rs['2013Fall_FirstName'] ?></td>
		<td><?=$rs['2013Fall_LastName'] ?></td>
		<td><?=$rs['UserLevel'] ?></td>
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
