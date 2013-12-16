<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];
$errors = null;

switch ($action) {

	case 'categories' :
		$model = Products::GetCategories();
		break;

	case 'removeFromCart' :
		unset($_SESSION['cart'][$_REQUEST['id']]);
		header('Location: ?action=cart');
		break;
	case 'emptyCart' :
		unset($_SESSION['cart']);
		$_SESSION['cart'] = array();
		$view = "cart.php";
		break;
	case 'products' :
		$model = Products::GetByCategory($_REQUEST['CategoryId']);
		break;
case 'purchase':
                $view = "purchase.php";
                break;
				 case 'login':
                        $model = array('LastName' => null, 'Password' => null);        
                 
                $view = "login.php";
                break;
	case 'cart' :
		foreach ($_SESSION['cart'] as $value) :
			$cart[] = Products::Get($value['id']);
		endforeach;

		$view = "cart.php";
		break;
	case 'addToCart' :
		if (!isset($_SESSION['cart']))
			$_SESSION['cart'] = array();
		$cart = $_SESSION['cart'];
		$cart[] = $_REQUEST['id'];
		$_SESSION['cart'] = $cart;
		header('Location: ?');
		die();
		break;

	default :
		$view = 'home.php';
		$title = 'Store';
		break;
}

switch ($format) {
	case 'dialog' :
		include '../Shared/_DialogLayout.php';
		break;

	case 'plain' :
		include $view;
		break;

	case 'json' :
		echo json_encode(array('model' => $model, 'errors' => $errors));
		break;

	default :
		include '../Shared/_FrontEndLayout.php';
		break;
}
