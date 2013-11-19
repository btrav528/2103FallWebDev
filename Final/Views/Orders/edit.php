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
                
                <div class="form-group <?=isset($errors['OrderNumber']) ? 'has-error' : ''?>">
                        <label for="OrderNumber" class="col-sm-2 control-label">Order Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="OrderNumber" id="OrderNumber" placeholder="Order Number" class="form-control " value="<?=$model['OrderNumber']?>"  />
                        </div>
                        <span><?=@$errors['OrderNumber']?></span>
                </div>
                <div class="form-group <?=isset($errors['DateOrdered']) ? 'has-error' : ''?>">
                        <label for="DateOrdered" class="col-sm-2 control-label">Date Ordered</label>
                        <div class="col-sm-10">
                                <input type="text" name="DateOrdered" id="DateOrdered" placeholder="Date Ordered in YYYY-MM-DD Format" class="form-control " value="<?=$model['DateOrdered']?>"  />
                        </div>
                        <span><?=@$errors['DateOrdered']?></span>
                </div>
                <div class="form-group <?=isset($errors['DateShipped']) ? 'has-error' : ''?>">
                        <label for="DateShipped" class="col-sm-2 control-label">Date Shipped</label>
                        <div class="col-sm-10">
                                <input type="text" name="DateShipped" id="DateShipped" placeholder="Date shipper in YYY-MM-DD Format" class="form-control "  value="<?=$model['DateShipped']?>" />
                        </div> 
                        <span><?=@$errors['DateShipped']?></span>
                </div>
                <div class="form-group <?=isset($errors['OrderTotal']) ? 'has-error' : ''?>">
                        <label for="DateShipped" class="col-sm-2 control-label">Order Total</label>
                        <div class="col-sm-10">
                                <input type="text" name="OrderTotal" id="OrderTotal" placeholder="Order Total" class="form-control "  value="<?=$model['OrderTotal']?>" />
                        </div> 
                        <span><?=@$errors['OrderTotal']?></span>
                </div>
                <div class="form-group <?=isset($errors['2013Fall_User_Id']) ? 'has-error' : ''?>">
                        <label for="DateShipped" class="col-sm-2 control-label">Customer ID</label>
                        <div class="col-sm-10">
                                <input type="text" name="2013Fall_User_Id" id="2013Fall_User_Id" placeholder="Customer ID" class="form-control "  value="<?=$model['2013Fall_User_Id']?>" />
                        </div> 
                        <span><?=@$errors['Decription']?></span>
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