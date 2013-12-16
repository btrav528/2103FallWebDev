<?php

/**
 *
 */
class OrderContents {

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_OrderContents WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_OrderContents');
		}
	}

	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From 2013Fall_OrderContents WHERE Id=$id ";

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

	static function Encode($row, $conn) {
		$row2 = array();
		foreach ($row as $key => $value) {
			$row2[$key] = $conn -> real_escape_string($value);
		}
		return $row2;
	}

	static public function Validate($row) {
		$errors = array();
		if (!$row['Item_Id'])
			$errors['Item ID'] = 'Id required';
		if (!$row['2013Fall_Orders_Id'])
			$errors['Order ID'] = 'Id required';

		return count($errors) ? $errors : null;
	}

	static public function Save($row) {
		$conn = GetConnection();
		$row2 = BillingAddress::Encode($row, $conn);
		if ($row['Id'] != null) {
			$sql = "UPDATE 2013Fall_OrderContents " . "SET Item_Id='" . $row2['Item_Id'] . "', 2013Fall_Orders_Id='" . $row2['2013Fall_Orders_Id'] . "' WHERE Id='" . $row2['Id'] . "';";
		} else {
			$sql = "Insert Into 2013Fall_OrderContents (Item_Id, 2013Fall_Orders_Id) Values ('" . $row2['Item_Id'] . "', '" . $row2['2013Fall_Orders_Id'] . "') ";
		}
		echo $sql;
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

	static public function Blank() {
		return array('Item_Id' => null, '2013Fall_Orders_Id' => null);
	}

}
