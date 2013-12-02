<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
	case 'categories':
		
		break;
	case 'products':
		$model=Users::Get();
		break;
        default:
                $model  = Contact::Get();
                $view         = 'List.php';
                $title        = 'Contact';                
                break;
}

switch ($format) {
        case 'dialog':
                include '../Shared/_Dialog.php';                                
                break;
         case 'plain':
                include $view;
                break;
        default:
                include '../Shared/_Layout.php';                
                break;
}
