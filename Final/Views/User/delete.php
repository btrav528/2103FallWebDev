<h3>
        Are you sure you want to delete
        <?=$model['2013Fall_FirstName']?> <?=$model['2013Fall_LastName']?>
</h3>
<form action="?action=delete" method="post">
        <input type="hidden" name="id" value="<?=$model['Id']?>" />
        <input type="submit" value="Delete" class="btn btn-primary"  />
        <a href="?action=list">No, your right.</a>
        
</form>