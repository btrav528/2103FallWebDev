<?php

/**
 *
 */
class OrderContents {

	static public function Get() {
		return FetchAll('SELECT * FROM 2013Fall_OrderContents');
	}

}
