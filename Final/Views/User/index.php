<?php
include_once '../../inc/_global.php';

@$action = $_REQUEST['action'];
@$format = $_REQUEST['format'];

switch ($action) {
        case 'details':
                $model  = Users::Get($_REQUEST['id']);
                $view         = 'details.php';
                $title        = "Edit: ".$model['2013Fall_FirstName']. $model['2013Fall_LastName']      ;        
                break;
                
        case 'new':
                $model = Users::Blank();
                $view         = 'edit.php';                
                $title        = "Create New User"        ;        
                break;
        
  
         case 'save':
                $errors = Users::Validate($_REQUEST);
                if(!$errors){
                        $errors = Users::Save($_REQUEST);                        
                }
                if(!$errors){
                        header("Location: ?status=Saved&Id=".$_REQUEST['Id']);
                        die();
                }                        
                        $model = $_REQUEST;
                        $view = 'edit.php';
                        $title        = "Edit: " .$model['2013Fall_FirstName']. $model['LastName']      ;        
                break;
                
        case 'edit':
                $model  = Users::Get($_REQUEST['id']);
                $view         = 'edit.php';                
                $title        = "Edit:".$model['2013Fall_FirstName']. $model['2013Fall_LastName']       ;        
                break;
                
        case 'delete':
                if(isset($_POST['id'])){
                        $errors = Users::Delete($_REQUEST['id']);                        
                        if(!$errors){
                                header("Location: ?");
                                die();
                        }                                                        
                }
                $model  = Users::Get($_REQUEST['id']);
                $view         = 'delete.php';                                        
                $title        = "Edit:".$model['2013Fall_FirstName']. $model['2013Fall_LastName']        ;        
                break;
        
        default:
                $model  = Users::Get();
                $view         = 'List.php';
                $title        = 'Users';                
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
