<?php

/**
 * 
 */
class Products {
        
       static public function Get($id = null) {
		if (isset($id)) {
			return Fetch_One("SELECT * FROM 2013Fall_Item WHERE Id=$id");
		} else {
			return FetchAll('SELECT * FROM 2013Fall_Item');
		}
	}
	

        static public function GetCategories()
        {
                        $sql = "        SELECT * FROM 2013Fall_Category";
                        return FetchAll($sql);                        
        }
        
        static public function GetByCategory($id=null)
        {
                        $sql = "        SELECT *
                                                FROM 2013Fall_Item WHERE Category_Id=$id
                                        ";
                        return FetchAll($sql);                        
        }
}