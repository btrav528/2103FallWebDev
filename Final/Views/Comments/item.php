 <tr class=" <?= $rs['Id']==$_REQUEST['Id'] ? 'success' : '' ?> ">
	<td><?=$rs['Item_Id'] ?></td>
		<td><?=$rs['Comment'] ?></td>
	<td><?=$rs['ItemScore'] ?></td>
	<td>
                                        <a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['Id']?>" ></a>
                                        <a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['Id']?>" ></a>
                                        <a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['Id']?>" ></a>
                                </td>

		</tr>
