<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type=t"text/css" rel="stylesheet"/>
<div class="container">
	<h2>Items</h2>

<table class="table table-hover table-bordered ">
	<thead>
	<tr>
		<th>
			Comments
		</th>
<th>
			Item Score
		</th>
</tr>
	</thead>
	<tbody>
<? foreach($model as $rs): ?>

	<tr><td><?=$rs['Comment'] ?></td>
	<td><?=$rs['ItemScore'] ?></td>
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
