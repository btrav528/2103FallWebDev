<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model  = ViewingHistory::Get($_REQUEST['id']);
                $view         = 'details.php';
                $title        = "Edit: ".$model['Id'] ;        
                break;
                
        case 'new':
                $model = ViewingHistory::Blank();
                $view         = 'edit.php';                
                $title        = "Create New Billing Address"        ;        
                break;
        
  
         case 'save':
                $errors = ViewingHistory::Validate($_REQUEST);
                if(!$errors){
                        $errors = ViewingHistory::Save($_REQUEST);                        
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
                $model  = ViewingHistory::Get($_REQUEST['id']);
                $view         = 'edit.php';                
                $title        = "Edit:".$model['Id'] ;        
                break;
                
        case 'delete':
                if(isset($_POST['id'])){
                        $errors = ViewingHistory::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model  = ViewingHistory::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit:".$model['Id'];        
                break;
        
        default:
                $model  = ViewingHistory::Get();
                $view         = 'List.php';
                $title        = 'ViewingHistory';                
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
