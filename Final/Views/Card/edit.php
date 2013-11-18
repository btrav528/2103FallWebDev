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
                
                <div class="form-group <?=isset($errors['NameOnCard']) ? 'has-error' : ''?>">
                        <label for="NameOnCard" class="col-sm-2 control-label">Name on the Card</label>
                        <div class="col-sm-10">
                                <input type="text" name="NameOnCard" id="NameOnCard" placeholder="Name On Card" class="form-control " value="<?=$model['NameOnCard']?>"  />
                        </div>
                        <span><?=@$errors['NameOnCard']?></span>
                </div>
                <div class="form-group <?=isset($errors['CardNumber']) ? 'has-error' : ''?>">
                        <label for="CardNumber" class="col-sm-2 control-label">Card Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="CardNumber" id="CardNumber" placeholder="Card Number" class="form-control " value="<?=$model['CardNumber']?>"  />
                        </div>
                        <span><?=@$errors['CardNumber']?></span>
                </div>
                <div class="form-group <?=isset($errors['SecurityCode']) ? 'has-error' : ''?>">
                        <label for="SecurityCode" class="col-sm-2 control-label">Security Code</label>
                        <div class="col-sm-10">
                                <input type="password" name="SecurityCode" id="SecurityCode" placeholder="Security Code" class="form-control "  value="<?=$model['SecurityCode']?>" />
                        </div> 
                        <span><?=@$errors['SecurityCode']?></span>
                </div>
                <div class="form-group <?=isset($errors['ExpDate']) ? 'has-error' : ''?>">
                        <label for="ExpDate" class="col-sm-2 control-label">Expiration Date</label>
                        <div class="col-sm-10">
                                <input type="text" name="ExpDate" id="ExpDate" placeholder="Expiration Date in YYYY-MM-DD Format" class="form-control "  value="<?=$model['ExpDate']?>" />
                        </div>
                        <span><?=@$errors['ExpDate']?></span>
                </div>
                <div class="form-group <?=isset($errors['Nickname']) ? 'has-error' : ''?>">
                        <label for="Nickname" class="col-sm-2 control-label">Optional Card Nickname</label>
                        <div class="col-sm-10">
                                <input type="text" name="Nickname" id="Nickname" placeholder="Card Nickname (Optional)" class="form-control "  value="<?=$model['Nickname']?>" />
                        </div>
                        <span><?=@$errors['Nickname']?></span>
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