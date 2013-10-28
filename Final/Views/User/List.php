<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" />
<div class="container">
        
        <h2>Users</h2>
        
        <a href="?action=new">Add Contact</a>
        
        <table class="table table-hover table-bordered table-striped">
                <thead>
                <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Type</th>
                        <th></th>
                </tr>
                </thead>
                <tbody>
                <? foreach ($model as $rs): ?>
                        <tr>
                                <td><?=$rs['2013Fall_FirstName']?></td>
                                <td><?=$rs['2013Fall_LastName']?></td>
                                <td><?=$rs['UserLevel']?></td>
                                <td>
                                        <a class="glyphicon glyphicon-file" href="?action=details&Id=<?=$rs['Id']?>"></a>
                                        <a class="glyphicon glyphicon-pencil" href="?action=edit&Id=<?=$rs['Id']?>"></a>
                                        <a class="glyphicon glyphicon-trash" href="?action=delete&Id=<?=$rs['Id']?>"></a>
                                </td>
                        </tr>
                <? endforeach ?>
                </tbody>
        </table>
</div>
<div class="modal fade" id="myModal">
</div>
  <? function Scripts(){ ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
                $(".table").dataTable();
        </script>
<? } ?>