<?php

/**
 *
 */
class Contact {

	static public function Get() {
	return FetchAll('SELECT * FROM 2013Fall_Contact');
	}

}
