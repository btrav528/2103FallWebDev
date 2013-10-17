<?php

/**
 *
 */
class Users {

	static public function Get() {
		return FetchAll('SELECT * FROM 2013Fall_User');
	}

}