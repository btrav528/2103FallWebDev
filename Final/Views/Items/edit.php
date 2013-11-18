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
                
                <div class="form-group <?=isset($errors['ItemName']) ? 'has-error' : ''?>">
                        <label for="ItemName" class="col-sm-2 control-label">Name of Item</label>
                        <div class="col-sm-10">
                                <input type="text" name="ItemName" id="ItemName" placeholder="Item Name" class="form-control " value="<?=$model['ItemName']?>"  />
                        </div>
                        <span><?=@$errors['ItemName']?></span>
                </div>
                <div class="form-group <?=isset($errors['Price']) ? 'has-error' : ''?>">
                        <label for="Price" class="col-sm-2 control-label">Price</label>
                        <div class="col-sm-10">
                                <input type="text" name="Price" id="Price" placeholder="Price" class="form-control " value="<?=$model['Price']?>"  />
                        </div>
                        <span><?=@$errors['Price']?></span>
                </div>
                <div class="form-group <?=isset($errors['NumberInStock']) ? 'has-error' : ''?>">
                        <label for="NumberInStock" class="col-sm-2 control-label">Number In Stock</label>
                        <div class="col-sm-10">
                                <input type="text" name="NumberInStock" id="NumberInStock" placeholder="Number In Stock" class="form-control "  value="<?=$model['NumberInStock']?>" />
                        </div> 
                        <span><?=@$errors['NumberInStock']?></span>
                </div>
                <div class="form-group <?=isset($errors['ItemID']) ? 'has-error' : ''?>">
                        <label for="NumberInStock" class="col-sm-2 control-label">Item ID Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="ItemID" id="ItemID" placeholder="Item ID" class="form-control "  value="<?=$model['ItemID']?>" />
                        </div> 
                        <span><?=@$errors['ItemID']?></span>
                </div>
                <div class="form-group <?=isset($errors['Description']) ? 'has-error' : ''?>">
                        <label for="NumberInStock" class="col-sm-2 control-label">Item ID Number</label>
                        <div class="col-sm-10">
                                <input type="text" name="Description" id="Description" placeholder="Short Description" class="form-control "  value="<?=$model['Description']?>" />
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