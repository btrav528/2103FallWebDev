<?php

/**
 *
 */
class Shipping{

	static public function Get() {
		return FetchAll('SELECT * FROM 2013Fall_ShippingAddress');
	}

}
