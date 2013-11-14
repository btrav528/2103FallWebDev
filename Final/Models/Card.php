<?php

/**
 *
 */
class Card {
	static public function Blank() {
		return array('NameOnCard' => null, 'CardNumber' => null, 'SecurityCode' => null, 'ExpDate' => null, 'BillingAddress_Id' =>null, 'Nickname' =>null, 'Id' =>null);
	}

	static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_CreditCard WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_CreditCard');
		}
	}
	static public function Delete($id) {
		$conn = GetConnection();
		$sql = " DELETE From 2013Fall_CreditCard WHERE Id=$id ";

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