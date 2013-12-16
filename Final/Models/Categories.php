<?php

/**
 *
 */
class Categories {

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_Category WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_Category');
		}
	}

	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From 2013Fall_Category WHERE Id=$id ";

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
		if (!$row['Name'])
			$errors['Name'] = 'Id required';

		return count($errors) ? $errors : null;
	}

	static public function Save($row) {
		$conn = GetConnection();
		$row2 = Categories::Encode($row, $conn);
		if ($row['Id'] != null) {
			$sql = "UPDATE 2013Fall_Category " . "SET Name='" . $row2['Name'] . "' WHERE Id='" . $row2['Id'] . "';";
		} else {
			$sql = "Insert Into 2013Fall_Category (Name) Values ('" . $row2["Name"] . "') ";
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
		return array('Name' => null, 'Id' => null);
	}

}
