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
                $sql =         " Insert Into 2013Fall_User (2013Fall_FirstName, 2013Fall_LastName, Password, UserLevel) "
                        .        " Values ('$row[FirstName]', '$row[LastName]', '$row[Password]', '$row[UserLevel]') ";
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
        
        
}