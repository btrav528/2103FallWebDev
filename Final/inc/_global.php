<?php
include_once ('_password.php');
include_once __DIR__ . '../../Models/Users.php';
include_once __DIR__ . '../../Models/Items.php';
include_once __DIR__ . '../../Models/Supplier.php';
include_once __DIR__ . '../../Models/Orders.php';
include_once __DIR__ . '../../Models/BillingAddress.php';
include_once __DIR__ . '../../Models/Categories.php';
include_once __DIR__ . '../../Models/Comments.php';
include_once __DIR__ . '../../Models/Contact.php';
include_once __DIR__ . '../../Models/Card.php';
include_once __DIR__ . '../../Models/OrderContents.php';
include_once __DIR__ . '../../Models/Shipping.php';
include_once __DIR__ . '../../Models/ViewHistory.php';
include_once __DIR__ . '../../Models/Products.php';
include_once __DIR__ . '../../Models/Auth.php';
session_start();
function GetConnection() {
	global $sql_password;
	$conn = new mysqli('localhost', 'n02207313', $sql_password, 'n02207313_db');
	return $conn;

}
function FetchAll($sql)
{
        $ret = array();
        $conn = GetConnection();
        $result = $conn->query($sql);
        echo $conn->error;
        
        while ($rs = $result->fetch_assoc()) {
                $ret[] = $rs;
        }
        
        $conn->close();
        return $ret;
	}
function Fetch_One($sql)
{
        $arr = FetchAll($sql);
        return $arr[0];
}
