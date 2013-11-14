<?php

/**
 *
 */
class BillingAddress {

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_BillingAddress WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_BillingAddress');
		}
	}

	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From 2013Fall_BillingAddress WHERE Id=$id ";

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
		if (!$row['LineOne'])
			$errors['LineOne'] = 'Id required';
		if (!$row['City'])
			$errors['City'] = 'Id required';
		if (!$row['State'])
			$errors['State'] = 'Id required';
		if (!$row['ZipCode'])
			$errors['ZipCode'] = 'Id required';
		if (!$row['Country'])
			$errors['Country'] = 'Id required';

		return count($errors) ? $errors : null;
	}
		static public function Save($row)
        {
                $conn = GetConnection();
                $row2 = BillingAddress::Encode($row, $conn);
                if($row['Id']!=null){
                        $sql ="UPDATE 2013Fall_BillingAddress " 
                        ."SET LineOne='".$row2['LineOne']."', LineTwo='".$row2["LineTwo"]."', City='".$row2["City"]."', State='".$row2["State"]."', ZipCode='".$row2["ZipCode"]."', Country='".$row2["Country"]
                        ."' WHERE Id='".$row2['Id']."';";
                }else{
                        $sql ="Insert Into 2013Fall_BillingAddress (LineOne, LineTwo, City, State, ZipCode, Country ) Values ('".$row2["LineOne"]."', '".$row2["LineTwo"]."', '"
                        .$row2["City"]."', '".$row2["State"]."', '".$row2["ZipCode"]. "', '".$row2['Country']."') ";                        
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
		return array('LineOne' => null, 'LineTwo' => null, 'City' => null, 'State' => null, 'ZipCode' =>null, 'Country' =>null, 'Id' =>null);
	}
}
