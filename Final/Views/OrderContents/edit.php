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
                
                <div class="form-group <?=isset($errors['Item_Id']) ? 'has-error' : ''?>">
                        <label for="Item_Id" class="col-sm-2 control-label">Item ID</label>
                        <div class="col-sm-10">
                                <input type="text" name="Item_Id" id="Item_Id" placeholder="Item ID" class="form-control " value="<?=$model['Item_Id']?>"  />
                        </div>
                        <span><?=@$errors['Item_Id']?></span>
                </div>
                <div class="form-group <?=isset($errors['2013Fall_Orders_Id']) ? 'has-error' : ''?>">
                        <label for="2013Fall_Orders_Id" class="col-sm-2 control-label">Order ID</label>
                        <div class="col-sm-10">
                                <input type="text" name="2013Fall_Orders_Id" id="2013Fall_Orders_Id" placeholder="Order ID" class="form-control " value="<?=$model['2013Fall_Orders_Id']?>"  />
                        </div>
                        <span><?=@$errors['2013Fall_Orders_Id']?></span>
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