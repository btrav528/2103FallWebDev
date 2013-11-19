<?php

/**
 *
 */
class ViewingHistory {

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_ViewingHistory WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_ViewingHistory');
		}
	}

	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From 2013Fall_ViewingHistory WHERE Id=$id ";

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
		if (!$row['2013Fall_Item_Id'])
			$errors['Item ID'] = 'Id required';
		if(!$row['2013Fall_User_Id'])
			$errors['Order ID']= 'Id required';
		if(!$row['DateViewed'])
			$errors['Date Viewed']= 'Date Required';

		return count($errors) ? $errors : null;
	}
		static public function Save($row)
        {
                $conn = GetConnection();
                $row2 = BillingAddress::Encode($row, $conn);
                if($row['Id']!=null){
                        $sql ="UPDATE 2013Fall_ViewingHistory " 
                        ."SET 2013Fall_Item_Id='".$row2['2013Fall_Item_Id']. "', DateViewed='".$row2['DateViewed']."', 2013Fall_User_Id='". $row2['2013Fall_User_Id']
                        ."' WHERE Id='".$row2['Id']."';";
                }else{
                        $sql ="Insert Into 2013Fall_ViewingHistory (DateViewed, 2013Fall_Item_Id, 2013Fall_User_Id) Values ('".$row2['DateViewed']."', '".$row2['2013Fall_Item_Id']."', '".$row2['2013Fall_User_Id']."') ";                        
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
		return array('2013Fall_Item_Id' => null,'2013Fall_User_Id' =>null, 'DateViewed' =>null, 'Id' =>null);
	}
}
