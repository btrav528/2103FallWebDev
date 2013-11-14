<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
	case 'save':
                $errors = Card::Validate($_REQUEST);
                if(!$errors){
                        $errors = Card::Save($_REQUEST);                        
                }
                if(!$errors){
                        header("Location: ?status=Saved&Id=".$_REQUEST['Id']);
                        die();
                }                        
                        $model = $_REQUEST;
                        $view = 'edit.php';
       
                break;
                
        case 'edit':
                $model  = Card::Get($_REQUEST['id']);
                $view         = 'edit.php';                
;        
                break;
                
	
        case 'details':
                $model  = Card::Get($_REQUEST['id']);
                $view         = 'details.php';      
                break;
          case 'new':
                $model = Card::Blank();
                $view         = 'edit.php';                
                $title        = "Create New User"        ;        
                break;
         case 'delete':
                if(isset($_POST['id'])){
                        $errors = Card::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model  = Card::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Delete:".$model['CardNumber'];      ;        
                break;
        default:
                $model  = Card::Get();
                $view         = 'List.php';
                $title        = 'Credit Cards';                
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
