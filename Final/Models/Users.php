<?php

/**
 * 
 */
class Users {
        
        static public function Get($id=null)
        {
                if(isset($id)){
                        return Fetch_One("SELECT * FROM 2013Fall_User WHERE Id=$id");                        
                }else{
                        return FetchAll('SELECT * FROM 2013Fall_User');                        
                }
        }
		 static public function Save($row)
        {
        	if($row['Id']){
        		$sql="UPDATE 2103Fall_User "
        			." Set 2013Fall_FirstName='$row[FirstName]', 2013Fall_LastName='$row[LastName]', Password='$row[Password]', UserLevel='$row[UserType]' "
        			." WHERE Id=$row['Id'] ";
			}
			else{
                $sql =         " Insert Into 2013Fall_User (2013Fall_FirstName, 2013Fall_LastName, Password, UserLevel) "
                        .        " Values ('$row[FirstName]', '$row[LastName]', '$row[Password]', '$row[UserType]') ";
                $conn = GetConnection();
                $conn->query($sql);
                $error = $conn->error;                
                $conn->close();
                
                if($error){
                        return array('db_error' => $error);
                }else {
                        return false;
                }
        }
		static public function Blank()
        {
                return array( 'FirstName'=> null,'LastName'=> null,'Password'=> null,'UserType'=> null );
        }
        
		static public function Validate($row)
        {
                $errors = array();
                if(!$row['FirstName']) $errors['FirstName'] = 'id required';
                if(!$row['LastName']) $errors['LastName'] = 'id required';
                if(!$row['UserType']) $errors['UserType'] = 'id required';
                
                return count($errors) ? $errors : null;
        }
        
}