<div class="container">
        <form action="?action=save" method="post"  class="form-horizontal row">
                
                <div class="form-group">
                        <label for="FistName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="FirstName" id="FirstName" placeholder="First Name" class="form-control " value="<?=$model['2013Fall_FirstName']?>"  />
                        </div>
                </div>
                <div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="LastName" id="LastName" placeholder="Last Name" class="form-control " value="<?=$model['2013Fall_LastName']?>"  />
                        </div>
                </div>
                <div class="form-group">
                        <label for="Password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                                <input type="password" name="Password" id="Password" placeholder="Password" class="form-control "  value="<?=$model['Password']?>" />
                        </div>
                </div>
                <div class="form-group">
                        <label for="UserType" class="col-sm-2 control-label">User Type</label>
                        <div class="col-sm-10">
                                <input type="text" name="UserType" id="UserType" placeholder="User Type" class="form-control "  value="<?=$model['UserLevel']?>" />
                        </div>
                </div>

                
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" class="form-control btn btn-primary" value="Save" />
                        </div>
                </div>
        </form>
</div>