<?php

/**
 * 
 */
class Products {
        
       static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_Item WHERE Id=$id");
		} else {
			return fetch_all('SELECT * FROM 2013Fall_Item');
		}
	}
	

        static public function GetCategories()
        {
                        $sql = "        SELECT * FROM 2013Fall_Category";
                        return fetch_all($sql);                        
        }
        
        static public function GetByCategory($id=null)
        {
                        $sql = "        SELECT *
                                                FROM 2013Fall_Item WHERE Category_Id=$id
                                        ";
                        return fetch_all($sql);                        
        }
}