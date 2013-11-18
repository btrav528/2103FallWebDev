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
                
                <div class="form-group <?=isset($errors['PrimaryEmail']) ? 'has-error' : ''?>">
                        <label for="PrimaryEmail" class="col-sm-2 control-label">Email Address</label>
                        <div class="col-sm-10">
                                <input type="text" name="PrimaryEmail" id="PrimaryEmail" placeholder="Email Address" class="form-control " value="<?=$model['PrimaryEmail']?>"  />
                        </div>
                        <span><?=@$errors['PrimaryEmail']?></span>
                </div>
                <div class="form-group <?=isset($errors['SecondaryEmail']) ? 'has-error' : ''?>">
                        <label for="SecondaryEmail" class="col-sm-2 control-label">Secondary Email</label>
                        <div class="col-sm-10">
                                <input type="text" name="SecondaryEmail" id="SecondaryEmail" placeholder="Secondary Email" class="form-control " value="<?=$model['SecondaryEmail']?>"  />
                        </div>
                        <span><?=@$errors['SecondaryEmail']?></span>
                </div>
                <div class="form-group <?=isset($errors['HomePhone']) ? 'has-error' : ''?>">
                        <label for="HomePhone" class="col-sm-2 control-label">Home Phone Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="HomePhone" id="HomePhone" placeholder="Home Phone Number" class="form-control "  value="<?=$model['HomePhone']?>" />
                        </div> 
                        <span><?=@$errors['HomePhone']?></span>
                </div>
                <div class="form-group <?=isset($errors['CellPhone']) ? 'has-error' : ''?>">
                        <label for="CellPhone" class="col-sm-2 control-label">Cell Phone Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="CellPhone" id="CellPhone" placeholder="Cell Phone Number" class="form-control "  value="<?=$model['CellPhone']?>" />
                        </div>
                        <span><?=@$errors['CellPhone']?></span>
                </div>
                <div class="form-group <?=isset($errors['OtherPhone']) ? 'has-error' : ''?>">
                        <label for="OtherPhone" class="col-sm-2 control-label">Other Phone</label>
                        <div class="col-sm-10">
                                <input type="text" name="OtherPhone" id="OtherPhone" placeholder="Optional Phone Number" class="form-control "  value="<?=$model['OtherPhone']?>" />
                        </div>
                        <span><?=@$errors['OtherPhone']?></span>
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