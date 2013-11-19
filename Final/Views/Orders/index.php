<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model  = Orders::Get($_REQUEST['id']);
                $view         = 'details.php';
                $title        = "Edit: ".$model['OrderNumber'];        
                break;
                
        case 'new':
                $model = Orders::Blank();
                $view         = 'edit.php';                
                $title        = "Create New Orders"        ;        
                break;
        
  
         case 'save':
                $errors = Orders::Validate($_REQUEST);
                if(!$errors){
                        $errors = Orders::Save($_REQUEST);                        
                }
                if(!$errors){
                        header("Location: ?status=Saved&Id=".$_REQUEST['Id']);
                        die();
                }                        
                        $model = $_REQUEST;
                        $view = 'edit.php';
                        $title        = "Edit: " .$model['OrderNumber'] ;        
                break;
                
        case 'edit':
                $model  = Orders::Get($_REQUEST['id']);
                $view         = 'edit.php';                
                $title        = "Edit:".$model['OrderNumber'];        
                break;
                
        case 'delete':
                if(isset($_POST['id'])){
                        $errors = Orders::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model  = Orders::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit:".$model['OrderNumber'] ;        
                break;
        
        default:
                $model  = Orders::Get();
                $view         = 'List.php';
                $title        = 'Orders';                
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
