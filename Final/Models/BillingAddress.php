<?php

/**
 *
 */
class BillingAddress {

	static public function Get() {
		$ret = array();
		$conn = GetConnection();
		$result = $conn -> query('SELECT * FROM 2013Fall_BillingAddress');

		while ($rs = $result -> fetch_assoc()) {
			$ret[] = $rs;
		}

		$conn -> close();
		return $ret;
	}

}
