<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type=t"text/css" rel="stylesheet"/>
<div class="container">
	<h2>Items</h2>

<table class="table table-hover table-bordered ">
	<thead>
	<tr>
		<th>
			Item ID
		</th>
		<th>
			Item Name
		</th>
		<th>Number in Stock</th>
		<th>Price</th>
		<th>Discription</th>
	</tr>
	</thead>
	<tbody>
<? foreach($model as $rs): ?>

	<tr><td><?=$rs['ItemID'] ?></td>
		<td><?=$rs['ItemName'] ?></td>
		<td><?=$rs['NumberInStock'] ?></td>
		<td><?=$rs['Price'] ?></td>
		<td><?=$rs['Discription'] ?></td>
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
