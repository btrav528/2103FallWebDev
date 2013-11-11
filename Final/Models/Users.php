<?php

/**
 *
 */
class Users {

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_User WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_User');
		}
	}

	static public function Save($row)
        {
                $conn = GetConnection();
                $row2 = Users::Encode($row, $conn);
                if($row['Id']){
                        $sql =        " UPDATE 2013Fall_User "
                                .        " Set 2013Fall_FirstName='$row2[FirstName]', 2013Fall_LastName='$row2[LastName]', Password='$row2[Password]', UserLevel='$row2[UserType]' "
                                .        " WHERE Id=$row2[id] ";
                }else{
                        $sql =         " Insert Into 2013Fall_User (2013Fall_FirstName, 2013Fall_LastName, Password, UserLevel) "
                                .        " Values ('$row2[FirstName]', '$row2[LastName]', '$row2[Password]', '$row2[UserType]') ";                        
                }
                
                $conn->query($sql);
                //echo $sql; 
                $error = $conn->error;                
                $conn->close();
                //$error = "dd";
                if($error){
                        return array('db_error' => $error);
                }else {
                        return false;
                }
        }

	static public function Blank() {
		return array('2013Fall_FirstName' => null, '2013Fall_LastName' => null, 'Password' => null, 'UserLevel' => null);
	}

	static public function Validate($row) {
		$errors = array();
		if (!$row['FirstName'])
			$errors['FirstName'] = 'Id required';
		if (!$row['LastName'])
			$errors['LastName'] = 'Id required';
		if (!$row['UserType'])
			$errors['UserType'] = 'Id required';

		return count($errors) ? $errors : null;
	}

	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From 2013Fall_User WHERE Id=$id ";

		$conn -> query($sql);
		//echo $sql;
		$error = $conn -> error;
		$conn -> close();
		//$error = "dd";
		if ($error) {
			return array('db_error' => $error);
		} else {
			return false;
		}
	}

	 static function Encode($row, $conn)
        {
                $row2 = array();
                foreach ($row as $key => $value) {
                        $row2[$key] = $conn->real_escape_string($value);                
                }
                return $row2;
        }
}
