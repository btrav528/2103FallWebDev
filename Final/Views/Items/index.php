<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model  = Items::Get($_REQUEST['id']);
                $view         = 'details.php';
                $title        = "Edit: ".$model['ItemName'];        
                break;
                
        case 'new':
                $model = Items::Blank();
                $view         = 'edit.php';                
                $title        = "Create New Items"        ;        
                break;
        
  
         case 'save':
                $errors = Items::Validate($_REQUEST);
                if(!$errors){
                        $errors = Items::Save($_REQUEST);                        
                }
                if(!$errors){
                        header("Location: ?status=Saved&Id=".$_REQUEST['Id']);
                        die();
                }                        
                        $model = $_REQUEST;
                        $view = 'edit.php';
                        $title        = "Edit: " .$model['Id'] ;        
                break;
                
        case 'edit':
                $model  = Items::Get($_REQUEST['id']);
                $view         = 'edit.php';                
                $title        = "Edit:".$model['ItemName'];        
                break;
                
        case 'delete':
                if(isset($_POST['id'])){
                        $errors = Items::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model  = Items::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit:".$model['ItemName'] ;        
                break;
        
        default:
                $model  = Items::Get();
                $view         = 'List.php';
                $title        = 'Items';                
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
