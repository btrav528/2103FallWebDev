<?php

/**
 *
 */
class Supplier {

	static public function Get() {
		return FetchAll('SELECT * FROM 2013Fall_Supplier');
	}

}
