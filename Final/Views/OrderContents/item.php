 <tr class=" <?= $rs['Id']==$_REQUEST['Id'] ? 'success' : '' ?> ">
	<td><?=$rs['Item_Id'] ?></td>
	<td><?=$rs['2013Fall_Orders_Id'] ?></td>
		<td>
                                        <a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['Id']?>" ></a>
                                        <a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['Id']?>" ></a>
                                        <a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['Id']?>" ></a>
                                </td>

		</tr>