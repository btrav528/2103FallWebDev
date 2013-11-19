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
                
                <div class="form-group <?=isset($errors['FirstLine']) ? 'has-error' : ''?>">
                        <label for="FirstLine" class="col-sm-2 control-label">Name on the Card</label>
                        <div class="col-sm-10">
                                <input type="text" name="FirstLine" id="FirstLine" placeholder="Address Line One" class="form-control " value="<?=$model['FirstLine']?>"  />
                        </div>
                        <span><?=@$errors['FirstLine']?></span>
                </div>
                <div class="form-group <?=isset($errors['SecondLine']) ? 'has-error' : ''?>">
                        <label for="SecondLine" class="col-sm-2 control-label">Address Line 2</label>
                        <div class="col-sm-10">
                                <input type="text" name="SecondLine" id="SecondLine" placeholder="Line 2" class="form-control " value="<?=$model['SecondLine']?>"  />
                        </div>
                        <span><?=@$errors['SecondLine']?></span>
                </div>
                <div class="form-group <?=isset($errors['City']) ? 'has-error' : ''?>">
                        <label for="City" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-10">
                                <input type="text" name="City" id="City" placeholder="City" class="form-control "  value="<?=$model['City']?>" />
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
                <div class="form-group <?=isset($errors['2013Fall_Nickname']) ? 'has-error' : ''?>">
                        <label for="2013Fall_Nickname" class="col-sm-2 control-label">Address "Nickname"</label>
                        <div class="col-sm-10">
                                <input type="text" name="2013Fall_Nickname" id="2013Fall_Nickname" placeholder="Nickname (Optional)" class="form-control "  value="<?=$model['2013Fall_Nickname']?>" />
                        </div>
                        <span><?=@$errors['2013Fall_Nickname']?></span>
                </div>
                <div class="form-group <?=isset($errors['2013Fall_User_Id']) ? 'has-error' : ''?>">
                        <label for="2013Fall_User_Id" class="col-sm-2 control-label">User Id</label>
                        <div class="col-sm-10">
                                <input type="text" name="2013Fall_User_Id" id="2013Fall_User_Id" placeholder="User Id" class="form-control "  value="<?=$model['2013Fall_User_Id']?>" />
                        </div>
                        <span><?=@$errors['2013Fall_User_Id']?></span>
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