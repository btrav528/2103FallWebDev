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
                
                <div class="form-group <?=isset($errors['LineOne']) ? 'has-error' : ''?>">
                        <label for="LineOne" class="col-sm-2 control-label">Name on the Card</label>
                        <div class="col-sm-10">
                                <input type="text" name="LineOne" id="LineOne" placeholder="Address Line One" class="form-control " value="<?=$model['LineOne']?>"  />
                        </div>
                        <span><?=@$errors['LineOne']?></span>
                </div>
                <div class="form-group <?=isset($errors['LineTwo']) ? 'has-error' : ''?>">
                        <label for="LineTwo" class="col-sm-2 control-label">Address Line 2</label>
                        <div class="col-sm-10">
                                <input type="text" name="LineTwo" id="LineTwo" placeholder="Line 2" class="form-control " value="<?=$model['LineTwo']?>"  />
                        </div>
                        <span><?=@$errors['LineTwo']?></span>
                </div>
                <div class="form-group <?=isset($errors['City']) ? 'has-error' : ''?>">
                        <label for="City" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-10">
                                <input type="password" name="City" id="City" placeholder="City" class="form-control "  value="<?=$model['City']?>" />
                        </div> 
                        <span><?=@$errors['City']?></span>
                </div>
                <div class="form-group <?=isset($errors['State']) ? 'has-error' : ''?>">
                        <label for="State" class="col-sm-2 control-label">State</label>
                        <div class="col-sm-10">
                                <input type="text" name="State" id="State" placeholder="State" class="form-control "  value="<?=$model['State']?>" />
                        </div>
                        <span><?=@$errors['State']?></span>
                </div>
                <div class="form-group <?=isset($errors['ZipCode']) ? 'has-error' : ''?>">
                        <label for="ZipCode" class="col-sm-2 control-label">Zip Code</label>
                        <div class="col-sm-10">
                                <input type="text" name="ZipCode" id="ZipCode" placeholder="Zip Code" class="form-control "  value="<?=$model['ZipCode']?>" />
                        </div>
                        <span><?=@$errors['ZipCode']?></span>
                </div>
                <div class="form-group <?=isset($errors['Country']) ? 'has-error' : ''?>">
                        <label for="Country" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-10">
                                <input type="text" name="Country" id="Country" placeholder="Card Country (Optional)" class="form-control "  value="<?=$model['Country']?>" />
                        </div>
                        <span><?=@$errors['Country']?></span>
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