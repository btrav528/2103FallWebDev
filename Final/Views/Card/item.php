 <tr class=" <?= $rs['Id']==$_REQUEST['Id'] ? 'success' : '' ?> ">
	<td><?=$rs['NameOnCard'] ?></td>
	<td><?=$rs['CardNumber'] ?></td>
	<td><?=$rs['Nickname'] ?></td>
	<td>
                                        <a class="glyphicon glyphicon-file" href="?action=details&id=<?=$rs['Id']?>" ></a>
                                        <a class="glyphicon glyphicon-pencil" href="?action=edit&id=<?=$rs['Id']?>" ></a>
                                        <a class="glyphicon glyphicon-trash" href="?action=delete&id=<?=$rs['Id']?>" ></a>
                                </td>
		</tr>