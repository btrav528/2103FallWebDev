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

                
                <div class="form-group <?=isset($errors['Comment']) ? 'has-error' : ''?>">
                        <label for="Comment" class="col-sm-2 control-label">Comment</label>
                        <div class="col-sm-10">
                                <input type="text" name="Comment" id="Comment" placeholder="Comment" class="form-control " value="<?=$model['Comment']?>"  />
                        </div>
                        <span><?=@$errors['Comment']?></span>
                </div>
                 <div class="form-group <?=isset($errors['ItemScore']) ? 'has-error' : ''?>">
                        <label for="ItemScore" class="col-sm-2 control-label">Item Score</label>
                        <div class="col-sm-10">
                                <input type="text" name="ItemScore" id="ItemScore" placeholder="ItemScore" class="form-control " value="<?=$model['ItemScore']?>"  />
                        </div>
                        <span><?=@$errors['ItemScore']?></span>
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