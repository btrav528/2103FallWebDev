<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model  = Shipping::Get($_REQUEST['id']);
                $view         = 'details.php';
                $title        = "Edit: ".$model['FirstLine'] ;        
                break;
                
        case 'new':
                $model = Shipping::Blank();
                $view         = 'edit.php';                
                $title        = "Create New Billing Address"        ;        
                break;
        
  
         case 'save':
                $errors = Shipping::Validate($_REQUEST);
                if(!$errors){
                        $errors = Shipping::Save($_REQUEST);                        
                }
                if(!$errors){
                        header("Location: ?status=Saved&Id=".$_REQUEST['Id']);
                        die();
                }                        
                        $model = $_REQUEST;
                        $view = 'edit.php';
                        $title        = "Edit: " .$model['FirstLine'] ;        
                break;
                
        case 'edit':
                $model  = Shipping::Get($_REQUEST['id']);
                $view         = 'edit.php';                
                $title        = "Edit:".$model['FirstLine'] ;        
                break;
                
        case 'delete':
                if(isset($_POST['id'])){
                        $errors = Shipping::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model  = Shipping::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit:".$model['FirstLine'];        
                break;
        
        default:
                $model  = Shipping::Get();
                $view         = 'List.php';
                $title        = 'Shipping';                
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
