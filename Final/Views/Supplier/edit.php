<div class="container">
        <? $errors = isset($errors) ? $errors : array(); ?>
        <? if(isset($errors) && count($errors)): ?>
                <ul>
                <? foreach ($errors as $key => $value): ?>
                        <li><label><?=$key?>:</label> <?=$value?></li>
                <? endforeach; ?>
                </ul>
        <? endif; ?>
        <form action="?action=save" method="post"  class="form-horizontal row">
                <input type="hidden" name="Id" value="<?=$model['Id']?>" />
                
                <div class="form-group <?=isset($errors['SupplierName']) ? 'has-error' : ''?>">
                        <label for="SupplierName" class="col-sm-2 control-label">Supplier Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="SupplierName" id="SupplierName" placeholder="Name" class="form-control " value="<?=$model['SupplierName']?>"  />
                        </div>
                        <span><?=@$errors['SupplierName']?></span>
                </div>
                <div class="form-group <?=isset($errors['SupplierLocation']) ? 'has-error' : ''?>">
                        <label for="SupplierLocation" class="col-sm-2 control-label">Supplier Address</label>
                        <div class="col-sm-10">
                                <input type="text" name="SupplierLocation" id="SupplierLocation" placeholder="Address" class="form-control " value="<?=$model['SupplierLocation']?>"  />
                        </div>
                        <span><?=@$errors['SupplierLocation']?></span>
                </div>
                
                
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>
<script type="text/javascript">
        $(function(){
                $("#UserType").val(<?=$model['UserType']?>);
        })        
</script>