<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type=t"text/css" rel="stylesheet"/>
<div class="container">
	<h2>Comments</h2>
<a href="?action=new">Add Comment</a>
<table class="table table-hover table-bordered ">
	<thead>
	<tr>
		<th>ItemID</th>
		<th>
			Comments
		</th>
<th>
			Item Score
		</th>
		<th></th>
</tr>
	</thead>
	<tbody>
<? foreach($model as $rs): ?>

	<tr><td><?=$rs['Item_Id'] ?></td>
		<td><?=$rs['Comment'] ?></td>
	<td><?=$rs['ItemScore'] ?></td>
	<td>
                                        <a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['Id']?>" ></a>
                                        <a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['Id']?>" ></a>
                                        <a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['Id']?>" ></a>
                                </td>

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
