<?php

/**
 *
 */
class Card {
	static public function Blank() {
		return array('NameOnCard' => null, 'CardNumber' => null, 'SecurityCode' => null, 'ExpDate' => null, 'BillingAddress_Id' =>null, 'Nickname' =>null, 'Id' =>null);
	}

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_CreditCard WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_CreditCard');
		}
	}
	static public function Validate($row) {
		$errors = array();
		if (!$row['NameOnCard'])
			$errors['NameOnCard'] = 'Id required';
		if (!$row['CardNumber'])
			$errors['CardNumber'] = 'Id required';
		if (!$row['SecurityCode'])
			$errors['SecurityCode'] = 'Id required';
		if (!$row['ExpDate'])
			$errors['ExpDate'] = 'Id required';

		return count($errors) ? $errors : null;
	}
	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From 2013Fall_CreditCard WHERE Id=$id ";

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
		static public function Save($row)
        {
                $conn = GetConnection();
                $row2 = Users::Encode($row, $conn);
                if($row['Id']!=null){
                        $sql ="UPDATE 2013Fall_CreditCard " 
                        ."SET NameOnCard='".$row2['NameOnCard']."', CardNumber='".$row2["CardNumber"]."', SecurityCode='".$row2["SecurityCode"]."', ExpDate='".$row2["ExpDate"]."', Nickname='".$row2["Nickname"]
                        ."' WHERE Id='".$row2['Id']."';";
                }else{
                        $sql ="Insert Into 2013Fall_CreditCard (NameOnCard, CardNumber, SecurityCode, ExpDate, Nickname,BillingAddress_Id, 2013Fall_User_Id ) Values ('".$row2["NameOnCard"]."', '".$row2["CardNumber"]."', '"
                        .$row2["SecurityCode"]."', '".$row2["ExpDate"]."', '".$row2["Nickname"]. "', '1', '1') ";                        
                }
                echo $sql;
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
}
?>