<?php

/**
 *
 */
class Comments {

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_Comments WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_Comments');
		}
	}

	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From 2013Fall_Comments WHERE Id=$id ";

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
		if (!$row['ItemScore'])
			$errors['ItemScore'] = 'Score required';
		if (!$row['Comment'])
			$errors['Comment'] = 'Comment/review is required';
		if ($row['ItemScore'] < 0 || $row['ItemScore'] > 100)
			$errors['ItemScore'] = 'Score must be between 0 and 100';
		return count($errors) ? $errors : null;
	}

	static public function Save($row) {
		$conn = GetConnection();
		$row2 = BillingAddress::Encode($row, $conn);
		if ($row['Id'] != null) {
			$sql = "UPDATE 2013Fall_Comments " . "SET Comment='" . $row2['Comment'] . "', ItemScore='" . $row2["ItemScore"] . "', Item_Id='1'" . "' WHERE Id='" . $row2['Id'] . "';";
		} else {
			$sql = "Insert Into 2013Fall_Comments (Comment, ItemScore, Item_Id) Values ('" . $row2["Comment"] . "', '" . $row2["ItemScore"] . "', '1') ";
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
		return array('Comment' => null, 'ItemScore' => null, 'Id' => null);
	}

}
