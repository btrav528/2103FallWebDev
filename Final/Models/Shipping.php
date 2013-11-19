<?php

/**
 *
 */
class Shipping {

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_ShippingAddress WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_ShippingAddress');
		}
	}

	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From 2013Fall_ShippingAddress WHERE Id=$id ";

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
		static public function Validate($row) {
		$errors = array();
		if (!$row['FirstLine'])
			$errors['FirstLine'] = 'Id required';
		if (!$row['City'])
			$errors['City'] = 'Id required';
		if (!$row['State'])
			$errors['State'] = 'Id required';
		if (!$row['ZipCode'])
			$errors['ZipCode'] = 'Id required';
		if (!$row['Country'])
			$errors['Country'] = 'Id required';
		if(!$row['2013Fall_User_Id'])
			$errors['User Id'] = 'Id Required';

		return count($errors) ? $errors : null;
	}
		static public function Save($row)
        {
                $conn = GetConnection();
                $row2 = Shipping::Encode($row, $conn);
                if($row['Id']!=null){
                        $sql ="UPDATE 2013Fall_ShippingAddress " 
                        ."SET FirstLine='".$row2['FirstLine']."',2013Fall_Nickname='".$row2['2013Fall_Nickname']."', SecondLine='".$row2["SecondLine"]."', City='".$row2["City"]."', State='".$row2["State"]."', 2013Fall_User_Id='".$row2['2013Fall_User_Id']
                        ."', ZipCode='".$row2["ZipCode"]."', Country='".$row2["Country"]
                        ."' WHERE Id='".$row2['Id']."';";
                }else{
                        $sql ="Insert Into 2013Fall_ShippingAddress (FirstLine, SecondLine, 2013Fall_Nickname ,City, State, ZipCode, Country, 2013Fall_User_Id ) Values ('".$row2["FirstLine"]."', '".$row2["SecondLine"]."', '"
                       .$row2['2013Fall_Nickname']."', '" .$row2["City"]."', '".$row2["State"]."', '".$row2["ZipCode"]. "', '".$row2['Country']."', '".$row2['2013Fall_User_Id']."') ";                        
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
        static public function Blank() {
		return array('FirstLine' => null, 'SecondLine' => null, 'City' => null, 'State' => null, 'ZipCode' =>null, 'Country' =>null, 'Id' =>null, '2013Fall_User_Id' =>null, '2013Fall_Nickname' =>null);
	}
}
