<?php

/**
 *
 */
class Items {

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_Item WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_Item');
		}
	}

	static public function GetCategories() {
		$sql = " SELECT * sFROM 2013Fall_Category ";
		return FetchAll($sql);
	}

	static public function Save($row) {
		$conn = GetConnection();
		$row2 = Items::Encode($row, $conn);
		if ($row['Id'] != null) {
			$sql = "UPDATE 2013Fall_Item " . "SET ItemID='" . $row2['ItemID'] . "', ItemName='" . $row2["ItemName"] . "', NumberInStock='" . $row2["NumberInStock"] . "', Price='" . $row2["Price"] . "' WHERE Id='" . $row2['Id'] . "';";
		} else {
			$sql = "Insert Into 2013Fall_Item (ItemID, ItemName, NumberInStock, Price, Description, Category_Id, Supplier_Id) Values ('" . $row2["ItemID"] . "', '" . $row2["ItemName"] . "', '" . $row2["NumberInStock"] . "', '" . $row2["Price"] . "', '" . $row2["Description"] . "', '1', '1') ";
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
		return array('ItemID' => null, 'ItemName' => null, 'NumberInStock' => null, 'Price' => null, 'Id' => null, 'Description' => null);
	}

	static public function Validate($row) {
		$errors = array();
		if (!$row['ItemName'])
			$errors['Item Name'] = 'Name required';
		if (!$row['Price'])
			$errors['Price'] = 'Price required';
		if (!$row['NumberInStock'])
			$errors['Number In Stock'] = 'Number in stock required';
		if (!$row['ItemID'])
			$errors['Item ID'] = 'Id required';

		return count($errors) ? $errors : null;
	}

	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From 2013Fall_Item WHERE Id=$id ";

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

}
