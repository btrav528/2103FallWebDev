<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
	case 'save':
                $errors = Categories::Validate($_REQUEST);
                if(!$errors){
                        $errors = Categories::Save($_REQUEST);                        
                }
                if(!$errors){
                        header("Location: ?status=Saved&Id=".$_REQUEST['Id']);
                        die();
                }                        
                        $model = $_REQUEST;
                        $view = 'edit.php';
       
                break;
                
        case 'edit':
                $model  = Categories::Get($_REQUEST['id']);
                $view         = 'edit.php';                
       
                break;
                
	
        case 'details':
                $model  = Categories::Get($_REQUEST['id']);
                $view         = 'details.php';      
                break;
          case 'new':
                $model = Categories::Blank();
                $view         = 'edit.php';                
                break;
         case 'delete':
                if(isset($_POST['id'])){
                        $errors = Categories::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model  = Categories::Get($_REQUEST['id']);
                $view         = 'delete.php';                                                
                break;
        default:
                $model  = Categories::Get();
                $view         = 'List.php';               
                break;
}

switch ($format) {
        case 'dialog':
                include '../Shared/_Dialog.php';                                
                break;
        
        default:
                include '../Shared/_Layout.php';                
                break;
}
