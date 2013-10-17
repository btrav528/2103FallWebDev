<?php

/**
 *
 */
class Comments {

	static public function Get() {
		$ret = array();
		$conn = GetConnection();
		$result = $conn -> query('SELECT * FROM 2013Fall_Comments');

		while ($rs = $result -> fetch_assoc()) {
			$ret[] = $rs;
		}

		$conn -> close();
		return $ret;
	}

}
