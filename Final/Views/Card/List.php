<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type=t"text/css" rel="stylesheet"/>
<div class="container">
	<h2>Credit Card Information</h2>

<table class="table table-hover table-bordered ">
	<thead>
	<tr>
		<th>
			User ID
		</th>
		<th>Name On Card</th>
		<th>
			Card Number
		</th>
<th>
			Security Code
		</th>
		<th>
			Expiration Date
		</th>
		<th>
			Billing Address ID
		</th>
		<th>
			Card Nickname(Opt)
		</th>
		
</tr>
	</thead>
	<tbody>
<? foreach($model as $rs): ?><tr>
<td><?=$rs['2013Fall_User_Id'] ?></td>
	<td><?=$rs['NameOnCard'] ?></td>
		<td><?=$rs['CardNumber'] ?></td>
	<td><?=$rs['SecurityCode'] ?></td>
	<td><?=$rs['ExpDate'] ?></td>
	<td><?=$rs['BillingAddress_Id'] ?></td>
	<td><?=$rs['Nickname'] ?></td>
	
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
