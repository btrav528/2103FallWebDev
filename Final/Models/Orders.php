<?php

/**
 *
 */
class Orders {

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_Orders WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_Orders');
		}
	}

	static public function Save($row)
        {
                $conn = GetConnection();
                $row2 = Orders::Encode($row, $conn);
                if($row['Id']!=null){
                        $sql ="UPDATE 2013Fall_Orders "
                        ."SET OrderNumber='".$row2['OrderNumber']."', DateOrdered='".$row2["DateOrdered"]."', DateShipped='".$row2["DateShipped"]."', OrderTotal='".$row2["OrderTotal"]."', 2013Fall_User_Id='".$row2['2013Fall_User_Id']
                        ."' WHERE Id='".$row2['Id']."';";
                }else{
                        $sql ="Insert Into 2013Fall_Orders (OrderNumber, DateOrdered, DateShipped, OrderTotal, 2013Fall_User_Id) Values ('".$row2["OrderNumber"]."', '".$row2["DateOrdered"]."', '"
                        .$row2["DateShipped"]."', '".$row2["OrderTotal"]."', '".$row2["2013Fall_User_Id"]."') ";                        
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
		return array('OrderNumber' => null, 'DateOrdered' => null, 'DateShipped' => null, 'OrderTotal' => null, 'Id' =>null, '2013Fall_User_Id' =>null);
	}

	static public function Validate($row) {
		$errors = array();
		if (!$row['DateOrdered'])
			$errors['Item Name'] = 'Name required';
		if (!$row['OrderTotal'])
			$errors['OrderTotal'] = 'OrderTotal required';
		if (!$row['DateShipped'])
			$errors['Number In Stock'] = 'Number in stock required';
		if (!$row['OrderNumber'])
			$errors['Item ID'] = 'Id required';

		return count($errors) ? $errors : null;
	}

	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From 2013Fall_Orders WHERE Id=$id ";

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
