<?php

/**
 *
 */
class Supplier {

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_Supplier WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_Supplier');
		}
	}

	static public function Save($row) {
		$conn = GetConnection();
		$row2 = Supplier::Encode($row, $conn);
		if ($row['Id'] != null) {
			$sql = "UPDATE 2013Fall_Supplier " . "SET SupplierName='" . $row2["SupplierName"] . "', SupplierLocation='" . $row2["SupplierLocation"] . "' WHERE Id='" . $row2['Id'] . "';";
		} else {
			$sql = "Insert Into 2013Fall_Supplier (SupplierName, SupplierLocation) Values ('" . $row2["SupplierName"] . "', '" . $row2["SupplierLocation"] . "') ";
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
		return array('SupplierName' => null, 'SupplierLocation' => null, 'Id' => null);
	}

	static public function Validate($row) {
		$errors = array();
		if (!$row['SupplierName'])
			$errors['Supplier Name'] = 'Name required';
		if (!$row['SupplierLocation'])
			$errors['Supplier Location'] = 'Location Required';

		return count($errors) ? $errors : null;
	}

	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From 2013Fall_Supplier WHERE Id=$id ";

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
