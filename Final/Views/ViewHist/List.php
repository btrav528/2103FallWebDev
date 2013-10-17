<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type=t"text/css" rel="stylesheet"/>
<div class="container">
	<h2>Viewing History</h2>

<table class="table table-hover table-bordered ">
	<thead>
	<tr>
		<th>
			Date Viewed
		</th>
		<th>
			Item ID
		</th>
		<th>User ID</th>
	</tr>
	</thead>
	<tbody>
<? foreach($model as $rs): ?>

	<tr><td><?=$rs['DateViewed'] ?></td>
		<td><?=$rs['2013Fall_Item_Id'] ?></td>
		<td><?=$rs['2013Fall_User_Id'] ?></td>
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
