<?php

/**
 *
 */
class Contact {
	static public function Blank() {
		return array('PrimaryEmail' => null, 'SecondaryEmail' => null, 'HomePhone' => null, 'CellPhone' => null, 'OtherPhone' => null, 'Id' => null);
	}

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_Contact WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_Contact');
		}
	}

	static public function Validate($row) {
		$errors = array();
		if (!$row['PrimaryEmail'])
			$errors['Primary Email'] = 'required';
		if (!$row['HomePhone'])
			$errors['HomePhone'] = 'required';
		return count($errors) ? $errors : null;
	}

	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From 2013Fall_Contact WHERE Id=$id ";

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

	static public function Save($row) {
		$conn = GetConnection();
		$row2 = Users::Encode($row, $conn);
		if ($row['Id'] != null) {
			$sql = "UPDATE 2013Fall_Contact " . "SET PrimaryEmail='" . $row2['PrimaryEmail'] . "', SecondaryEmail='" . $row2["SecondaryEmail"] . "', HomePhone='" . $row2["HomePhone"] . "', CellPhone='" . $row2["CellPhone"] . "', OtherPhone='" . $row2["OtherPhone"] . "' WHERE Id='" . $row2['Id'] . "';";
		} else {
			$sql = "Insert Into 2013Fall_Contact (PrimaryEmail, SecondaryEmail, HomePhone, CellPhone, OtherPhone, User_Id ) Values ('" . $row2["PrimaryEmail"] . "', '" . $row2["SecondaryEmail"] . "', '" . $row2["HomePhone"] . "', '" . $row2["CellPhone"] . "', '" . $row2["OtherPhone"] . "', '1') ";
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

}
?>