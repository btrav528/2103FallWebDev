<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type=t"text/css" rel="stylesheet"/>
<div class="container">
	<h2>Items</h2>

<table class="table table-hover table-bordered ">
	<thead>
	<tr>
		<th>Primary Email</th>
		<th>Secondary Email</th>
		<th>Home Phone Number</th>
		<th>Cell Phone Number</th>
		<th>Other Phone Number</th>
		<th>User ID</th>
</tr>
	</thead>
	<tbody>
<? foreach($model as $rs): ?>

	<tr><td><?=$rs['PrimaryEmail'] ?></td>
		<td><?=$rs['SecondaryEmail'] ?></td>
	<td><?=$rs['HomePhone'] ?></td>
	<td><?=$rs['CellPhone'] ?></td>
	<td><?=$rs['OtherPhone'] ?></td>
	<td><?=$rs['User_Id'] ?></td>
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
	<?}?>
