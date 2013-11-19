<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model  = Supplier::Get($_REQUEST['id']);
                $view         = 'details.php';
        
                break;
                
        case 'new':
                $model = Supplier::Blank();
                $view         = 'edit.php';                
                $title        = "Create New supplier"        ;        
                break;
        
  
         case 'save':
                $errors = Supplier::Validate($_REQUEST);
                if(!$errors){
                        $errors = Supplier::Save($_REQUEST);                        
                }
                if(!$errors){
                        header("Location: ?status=Saved&Id=".$_REQUEST['Id']);
                        die();
                }                        
                        $model = $_REQUEST;
                        $view = 'edit.php';
      
                break;
                
        case 'edit':
                $model  = Supplier::Get($_REQUEST['id']);
                $view         = 'edit.php';                
      
                break;
                
        case 'delete':
                if(isset($_POST['id'])){
                        $errors = Supplier::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model  = Supplier::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
        
                break;
        
        default:
                $model  = Supplier::Get();
                $view         = 'List.php';
              
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
